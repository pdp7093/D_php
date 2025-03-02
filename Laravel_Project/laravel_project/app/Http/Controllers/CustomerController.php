<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\order;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\welcomemail;
use App\Mail\forgotpassword;
use Mail;
use Validator;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    //Login Function
    public function login()
    {
        //

        return view('website.login');
    }

    public function login_auth(Request $request)
    {
        //
        $validated = $request->validate([

            'email' => 'required',
            'password' => 'required',

        ]);
        $data = customer::where('email', $request->email)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {

                session()->put('uemail', $data->email);
                session()->put('uimage', $data->image);
                session()->put('uid', $data->id);
                Alert::success('Login Success', "User Login Successfully");
                return redirect('/');
            } else {
                Alert::error('Login Failed', "Password Not Match!");
                return redirect('/Login');
            }
        } else {
            Alert::error('Login Failed', "Email Not Match!");
            return redirect('/Login');
        }

    }
    public function profile(customer $customer)
    {
        $data = customer::where('email', session()->get('uemail'))->first();
        $order = order::join('customers', 'customers.id', '=', 'orders.cust_id')
            ->join('products', 'products.id', '=', 'orders.pro_id')
            ->get(['orders.*', 'products.product_title']);

        return view('website.profile', ["data" => $data], ["order" => $order]);
    }
    public function logout()
    {
        session()->pull('uemail');
        session()->pull('uimage');
        session()->pull('uid');
        Alert::success('Logout Success', "User Logout Successful");
        return redirect('/Login');
    }
    public function forgot_v()
    {
        return view('website.forgot_password');
    }
    public function forgot(customer $customer, Request $request)
    {
        $data = customer::where('email', $request->email)->first();
        $email = $data->email;
        if ($email) {

            session()->put('femail', $data->email);
            //echo session('femail');
            $otp = rand(100000, 999999);
            //echo $otp;
            setcookie('otp', $otp, time() + 600);

            $mail = array("name" => $data->firstname . $data->lastname, "email" => $data->email, "otp" => $otp);
            Mail::to($email)->send(new forgotpassword($mail));
            Alert::success('Otp send', 'Otp Send successfully check your email');
            return redirect('/ResetPassword');
        } else {
            Alert::error('Email not found', 'This id is not register with us');
            return redirect('/ForgotPassword');
        }
    }
    //Reset Password
    public function reset()
    {
        return view('website.reset_password');
    }
    public function reset_password(Request $request)
    {
        
           
            if (isset($_COOKIE['otp'])) {
                if ($request->otp == $_COOKIE['otp']) {
                    $email = session('femail');
                    
                    $data = customer::where('email', $email)->first();
                    if ($request->password == $request->re_password) {
                        $data->password = Hash::make($request->password);
                        $data->update();
                        Alert::success('Reset Successfully', 'Password Reset Successfull');
                        session()->pull('femail');
                        setcookie("otp", "", time() - 600);
                        return redirect('/ForgotPassword');
                    } else {
                        Alert::error('Not Match', 'Password Not Match');
                        return redirect('/ResetPassword');
                    }
                } else {
                    Alert::error('Otp Not Match', 'Please Enter Correct Password');
                }
            } else {
                Alert::error('Otp Expiry', 'Time out, Please try again later');
                return redirect('/ForgotPassword');
            }
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('website.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Form Validation
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:customers',
            'mobile' => 'required|unique:customers|numeric',
            'gender' => 'required|in:Male,Female',
            'password' => 'required',
            'image' => 'required|image',
        ]);
        //Insert Record In Database


        $insert = new customer;

        $insert->firstname = $request->firstname;
        $insert->lastname = $request->lastname;
        $email = $insert->email = $request->email;
        $insert->mobile = $request->mobile;
        $insert->gender = $request->gender;
        $insert->password = Hash::make($request->password);

        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/customers/', $filename);
        $insert->image = $filename;

        $insert->save();
        $data = array("name" => $insert->firstname . $insert->lastname, "email" => $insert->email);
        Mail::to($email)->send(new welcomemail($data));
        Alert::success('Register Success', "User Register Successful");
        return redirect('/Login');

    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        $data = customer::all();
        return view('admin.manage_Users', ["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer, $id)
    {
        //
        $data = customer::find($id);
        return view('website.edit_profile', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer, $id)
    {
        //
        $update = customer::find($id);
        $update->firstname = $request->firstname;
        $update->lastname = $request->lastname;
        $update->email = $request->email;
        if (session('uemail') != $request->email) {
            session()->put('uemail', $request->email);
        }
        $update->mobile = $request->mobile;
        $update->gender = $request->gender;

        if ($request->hasFile('image')) {
            unlink('website/upload/customers/' . $update->image);
            $file = $request->file('image');
            $filename = time() . '_img.' . $request->file('image')->getClientOriginalExtension();
            $file->move('website/upload/users/', $filename);  // use move for move image in public/images
            $update->img = $filename;
            session()->put('uimage', $filename);
        }
        $update->update();
        Alert::success('Update Success', "User Update Successful");
        return redirect('/Profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer, $id)
    {
        //
        $data = customer::find($id)->delete();

        session()->pull('uemail');
        session()->pull('uimage');
        session()->pull('uid');
        Alert::success('Delete Success', "User Delete Successful");
        return redirect('/Manage_Users');
    }
    public function status($id)
    {
        $data = customer::find($id);
        if ($data->status == "Unblock") {
            $data->status = "Block";
            $data->update();
            Alert::success('Update Success', "User Status Successful");
            return redirect('/Manage_Users');
        } else {
            $data->status = "Unblock";
            $data->update();
            Alert::success('Update Success', "User Status  Successful");
            return redirect('/Manage_Users');
        }
    }

    //Api Routes

    public function api_show()
    {
        $data=customer::all();
        return response()->json([
            "status"=>200,
            "customer"=>$data
        ]); 
    }
    public function api_store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'firstname'=>'required',
            'lastname'=>'required',
            'email' => 'required|unique:customers',
            'mobile' => 'required|unique:customers|numeric',
            'gender' => 'required|in:Male,Female',
            'password' => 'required',
            'image' => 'required|image',            
        ]);
        if($validate->fails())
        {
            return [
                'success'=>0,
                'message'=>$validate->messages(),
            ];

        }
        else
        {
            $insert = new customer;

            $insert->firstname = $request->firstname;
            $insert->lastname = $request->lastname;
            $email = $insert->email = $request->email;
            $insert->mobile = $request->mobile;
            $insert->gender = $request->gender;
            $insert->password = Hash::make($request->password);
    
            $file = $request->file('image');
            $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
            $file->move('website/upload/customers/', $filename);
            $insert->image = $filename;
    
            $insert->save();
            $data = array("name" => $insert->firstname . $insert->lastname, "email" => $insert->email);
            Mail::to($email)->send(new welcomemail($data));

            return response()->json([
                'status'=>200,
                'message'=>'Register Success',
            ]);
        }
    }
}

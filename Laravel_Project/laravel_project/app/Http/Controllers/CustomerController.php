<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\order;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
        $data=customer::where('email',session()->get('uemail'))->first();
        $order=order::join('customers','customers.id','=','orders.cust_id')
                ->join('products','products.id','=','orders.pro_id')
                ->get(['orders.*','products.product_title']);
        return view('website.profile', ["data" => $data],["order"=>$order]);
    }
    public function logout()
    {
        session()->pull('uemail');
        session()->pull('uimage');
        session()->pull('uid');
        Alert::success('Logout Success', "User Logout Successful");
        return redirect('/Login');
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
            'gender'=> 'required|in:Male,Female',
            'password' => 'required',
            'image' => 'required|image',
        ]);
        //Insert Record In Database


        $insert = new customer;

        $insert->firstname = $request->firstname;
        $insert->lastname = $request->lastname;
        $insert->email = $request->email;
        $insert->mobile = $request->mobile;
        $insert->gender = $request->gender;
        $insert->password = Hash::make($request->password);

        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/customers/', $filename);
        $insert->image = $filename;

        $insert->save();
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
    public function edit(customer $customer,$id)
    {
        //
        $data=customer::find($id);
        return view('website.edit_profile',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer,$id)
    {
        //
        $update=customer::find($id);
        $update->firstname = $request->firstname;
        $update->lastname = $request->lastname;
        $update->email = $request->email;
        if(session('uemail')!=$request->email)
        {
            session()->put('uemail', $request->email);
        }
        $update->mobile = $request->mobile;
        $update->gender = $request->gender;
        
        if($request->hasFile('image')) 
        {
            unlink('website/upload/customers/'.$update->image);
            $file=$request->file('image');		
            $filename=time().'_img.'.$request->file('image')->getClientOriginalExtension();
            $file->move('website/upload/users/',$filename);  // use move for move image in public/images
            $update->img=$filename;
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
        $data=customer::find($id);
        if($data->status=="Unblock")
        {
            $data->status="Block";
            $data->update();
            Alert::success('Update Success', "User Status Successful");
            return redirect('/Manage_Users');
        }
        else
        {
            $data->status="Unblock";
            $data->update();
            Alert::success('Update Success', "User Status  Successful");
            return redirect('/Manage_Users');
        }
    }
}

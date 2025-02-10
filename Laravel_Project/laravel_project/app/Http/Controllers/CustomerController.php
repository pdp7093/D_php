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
            'mobile' => 'required|unique:customers',
            'gender' => 'required',
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer, $id)
    {
        //
        $data = customer::find($id)->delete();
        return redirect('/Manage_Users');
    }
}

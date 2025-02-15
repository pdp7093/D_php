<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('website.signup');
    }
    public function login()
    {
        return view('website.login');
    }
    public function login_auth(Request $request)
    {
       $data=customer::where('username',$request->username)->first();
       if($data)
       {
            if(Hash::check($request->password,$data->password))
            {
                if($data->status=="Unblock")
                {
                    //session create
                    session()->put('username',$data->username);
                    session()->put('uimage',$data->image);
                    session()->put('uid',$data->id); 
                    // get session()->get('uname');
                    //delete session()->pull('uname');

                    Alert::success('Login Success', "User Login Successful");
                    return redirect('/');
                }
                else
                {
                    Alert::error('Login Failed', "Blocked Account");
                    return redirect('/Login');
                }
            }
            else
            {
                Alert::error('Login Failed', "Password Doesn't Not Match");
                return redirect('/Login');
            }
       }
       else
       {
            Alert::error('Login Failed', "Username Doesn't Exist");
            return redirect('/Login');
       }
    }

    function user_logout(){
        session()->pull('uname');
        session()->pull('uimage');
        session()->pull('uid');
        Alert::success('Logout Success', "User Logout Successful");
        return redirect('/');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'username' => 'required|unique:customers',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:customers',
            'mobile' => 'required|unique:customers',
            'gender' => 'required',
            'password' => 'required',
            'image' => 'required|image',
        ]);
        $insert = new customer;
        $insert->username = $request->username;
        $insert->firstname = $request->firstname;
        $insert->lastname = $request->lastname;
        $insert->email = $request->email;
        $insert->mobile = $request->mobile;
        $insert->gender = $request->gender;
        $insert->password = Hash::make($request->password);

        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/customer/', $filename);
        $insert->image = $filename;

        $insert->save();
        Alert::success('Account Created','Account Created Successfully');
        return redirect('/Login');
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
        //$cust_id
        $data=customer::find(session('uid'));
        return view('website.profile',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
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
    public function destroy(customer $customer)
    {
        //
    }
}

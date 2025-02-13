<?php

namespace App\Http\Controllers;

use App\Models\customer;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Signup Page Show
        return view('website.signup');
    }

    public function login()
    {
        return view('website.login');
    }
    public function login_auth(Request $request)
    {
        //
        $validated = $request->validate([

            'username' => 'required',
            'password' => 'required',

        ]);
        $data = customer::where('username', $request->username)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                if ($data->status == 'Unblock') {
                    session()->put('username', $data->username);
                    session()->put('uimage', $data->image);
                    session()->put('uid', $data->id);
                    Alert::success('Login Success', "User Login Successfully");
                    return redirect('/');
                }
                else
                {
                    Alert::error('Login Failed', "You are block!");
                    return redirect('/Login');   
                }

            } else {
                Alert::error('Login Failed', "Password Not Match!");
                return redirect('/Login');
            }
        } else {
            Alert::error('Login Failed', "Username Not Match!");
            return redirect('/Login');
        }

    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert record in the customer table
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
        //
        $data=customer::where('username',session()->get('username'))->first();
       
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

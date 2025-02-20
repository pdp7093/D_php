<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
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
        return view('admin.register');
    }
    public function adminlogin(Request $request)
    {
        //Admin Login
        $validated=$request->validate(['email'=>'required','password'=>'required']);
        
        $data = admin::where('email', $request->email)->first();
        if($data)
        {
            if (Hash::check($request->password, $data->password)) {
                session()->put('aemail', $data->email);
                session()->put('aid', $data->id);
                Alert::success('Login Success', "Admin Login Successfully");
                return redirect('/dashboard');
            }
            else
            {
                Alert::error('Login Failed', "Detail Not Match!");
                return redirect('/AdminLogin');
            }
        }
    }
    public function adminlogout()
    {
        
        session()->pull('aemail');
        session()->pull('aid');
        Alert::success('Logout Success', "Admin Logout Successful");
        return redirect('/AdminLogin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $data=new admin;
        $data->name=$request->name;
        $data->email=$request->email;
        $password=$request->password;
        $password1=$request->password1;

        if($password==$password1)
        {
            $data->password=Hash::make($request->password);
            $data->save();
            Alert::success('Register Success','Admin Register Successfully');
            return redirect('/AdminLogin');
        }
        else{
            Alert::error('Password Not','Mismatch password please enter again');
            return redirect('/Register');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
        return view('admin.login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}

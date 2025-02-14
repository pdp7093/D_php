<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
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
                return redirect('/admin-login');
            }
        }
    }
    public function adminlogout()
    {
        
        session()->pull('aemail');
        session()->pull('aid');
        Alert::success('Logout Success', "Admin Logout Successful");
        return redirect('/admin-login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
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

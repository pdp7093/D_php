<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomemail;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
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
        $data = user::where('email', $request->email)->first();
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


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert record
        $insert = new user;
        $insert->firstname = $request->firstname;
        $insert->lastname = $request->lastname;
        $insert->email = $request->email;
        $email = $request->email;
        $insert->mobile = $request->mobile;

        $insert->password = Hash::make($request->password);

        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/customers/', $filename);
        $insert->image = $filename;

        $insert->save();

        //Mail Sending
       

        Alert::success('Register Success', "User Register Successful");
        return redirect('/Login');


    }

    /**
     * Display the specified resource.
     */
    public function sendmail($email)
    {
        $ud=user::where('email',$email)->first();
        $data=['name'=>$ud->firstname.$ud->lastname,'email'=>$ud->email];
        $user['to']=$ud->email;
        Mail::send('mail.mail',$data,function ($messages) use($user){
            $messages->to($user['to']);
            $messages->subject('Forgot Password');
        });
        Alert::success('Mail Send','Mail send successfully');
        return redirect('/Profile');
    }
    public function forgot(user $user,$email)
    {
        //
        $data = user::where('email',$email)->first();
        return view('website.forgot', ['data' => $data]);

    }
    public function forgot_pass(user $user,$email,Request $request)
    {
        //
        $data = user::where('email',$email)->first();
        if($request->password==$request->re_password)
        {
            $data->password=$request->password;
            
            $data->update();

            Alert::success('Password Update','Your password update sucessfully');
            return redirect('/Profile');
        }
        else{
            Alert::error('Password Mismatch','Please enter same password');
        }
        return view('website.forgot', ['data' => $data]);

    }
    public function show(user $user)
    {
        //
        $data = user::find(session('uid'));
        return view('website.profile', ['data' => $data]);

    }

    public function logout(user $user)
    {
        //
        session()->pull('uemail');
        session()->pull('uimage');
        session()->pull('uid');
        Alert::success('Logout Success', "User Logout Successful");
        return redirect('/Login');

    }

    /**
     * Show the form for editing the specified resource.
     */ 
     public function reset_pass(user $user,$email)
    {
        //
        $data=user::where('email',$email)->first();
        return view('website.password',['data'=>$data]);
    }
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //

    }
}

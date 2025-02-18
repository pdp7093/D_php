<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Http\Controllers\Controller;
use App\Models\song;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
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
    public function create($id)
    {
        //
        if (session('uemail')) {
            $data = song::find($id);
            return view('website.review', ['data' => $data]);
        } else {
            Alert::error('Login First', 'Login First for Review');
            return redirect('/Login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        //
        $insert =new review;
        $insert->song_id=$id;
        $insert->user_id=session('uid');
        $insert->comment=$request->comment;

        $insert->save();
        Alert::success('Review Submit','Your Review Submit Successfully');
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(review $review)
    {
        //
    }
}

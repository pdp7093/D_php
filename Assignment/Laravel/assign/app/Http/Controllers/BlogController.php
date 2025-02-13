<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\category;
use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BlogController extends Controller
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
        $data=category::all();
        return view('website.create_blog',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'category'=>'required',
            'title'=>'requried',
            'content'=>'requried',
            'image'=>'requried'
        ]);
        $insert=new blog;
        $insert->cate_id=$request->category;
        $insert->user_id=session('uid');
        $insert->title=$request->title;
        $insert->content=$request->content;
        
          // img upload
          $file=$request->file('blog_image');		
          $filename=time().'_img.'.$request->file('blog_image')->getClientOriginalExtension();
          $file->move('webiste/upload/blogs/',$filename);  // use move for move image in public/images
         
          $insert->blog_image=$filename;
          $insert->save();
          Alert::success('Blog Create','Blog Create Successfully');
          return redirect('/Blog');

    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
        return view('website.blog');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        //
    }
}

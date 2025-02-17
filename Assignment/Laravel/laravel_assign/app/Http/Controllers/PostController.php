<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\customer;
use App\Models\post;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=post::join('categories','categories.id','=','posts.cate_id')
        ->join('customers','customers.id','=','posts.user_id')
        ->where('posts.status','published')->get(['posts.*','categories.category_name','customers.firstname','customers.lastname']);
        return view('website.index',['data'=>$data]);
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
        $validated = $request->validate([
            'title' => 'required|unqiue:posts',
            'content' => 'required',
            'blog_image'=>'required|image'
        ]);

       
        $insert=new post;
        $insert->cate_id=$request->category;
        $insert->user_id=session('uid');
        $insert->title=$request->title;
        $insert->content=$request->content;
        
          // img upload
          $file=$request->file('blog_image');		
          $filename=time().'_img.'.$request->file('blog_image')->getClientOriginalExtension();
          $file->move('website/upload/blogs/',$filename);  // use move for move image in public/images
         
          $insert->blog_image=$filename;
          $insert->save();
          Alert::success('Blog Create','Blog Create Successfully');
          return redirect('/Profile');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
        $data=post::join('categories','categories.id','=','posts.cate_id')
        ->join('customers','customers.id','=','posts.user_id')
        ->where('posts.status','published')->get(['posts.*','categories.category_name','customers.firstname','customers.lastname']);
        return view('website.blog',['data'=>$data]);
    }
    public function view(post $post,$title)
    {
        $post_title=$title;
      //
        $data=post::join('categories','categories.id','=','posts.cate_id')
        ->join('customers','customers.id','=','posts.user_id')
        ->where('title',$post_title)->first(['posts.*','categories.category_name','customers.firstname','customers.lastname']);
        return view('website.single_blog',['data'=>$data]);
    }

    public function publish($id)
    {
        //
        $data=post::find($id);
        if($data->status=='draft')
        {
            $data->status='published';
            $data->update();
            alert::success('Publish Success','Your Post Publish Successfully');
            return redirect('/Profile');
        }
        else
        {
            alert::error('Post Published','Post is already publish');
            return redirect('/Profile');
        }
        //return view('website.blog',['data'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post,$id)
    {
        //
        
        $data=post::find($id);
        $c_id=$data->cate_id;
        $data1=category::find($c_id);
        return view('website.edit',['data'=>$data],['cat'=>$data1]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post,$id)
    {
        //
        $data=post::find($id);
       
        $data->title=$request->title;
        $data->content=$request->content;
        
          // img upload
          if($request->hasFile('blog_image')) 
          {
            unlink('website/upload/blogs/'.$data->blog_image);
            $file=$request->file('blog_image');		
            $filename=time().'_img.'.$request->file('blog_image')->getClientOriginalExtension();
            $file->move('website/upload/blogs/',$filename);  // use move for move image in public/images
            
            $data->blog_image=$filename;
          }
          $data->update();
          Alert::success('Blog Update','Blog Update Successfully');
          return redirect('/Profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post,$id)
    {
        //Delete Record/Post
        $data=post::find($id)->delete();
        if($data)
        {
            alert::success('Post Delete','Your Post Delete Successfull');
            return redirect('/Profile');
        }
    }
}

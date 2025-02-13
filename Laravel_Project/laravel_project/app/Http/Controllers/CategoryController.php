<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=category::all();
        return view('website.product',['data'=>$data]);
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.add_categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Insert Category
        $validated = $request->validate([
            'categories_title' => 'required|unique:categories|max:255',
            'categories_image' => 'required|image',
        ]);

        $insert=new category();
        $insert->categories_title=$request->categories_title;
        $file=$request->file('categories_image');
        $filename=time().'Category.'.$request->file('categories_image')->getClientOriginalExtension();
        $file->move('admin/img/Category/',$filename);
        $insert->categories_image=$filename;
        $insert->save();
        Alert::success('Category Insert','Category Insert Successfully');
        return redirect('/Manage_Categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
        $data=category::all();
        return view('admin.manage_categories',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category,$id)
    {
        //
        $data=category::find($id);
        return view('admin.edit_categories',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category,$id)
    {
        //
        $update=category::find($id);
       
        $update->categories_title=$request->categories_title;
        if($request->hasFile('categories_image')) 
        {
            unlink('website/upload/users/'.$update->categories_image);
            $file=$request->file('categories_image');		
            $filename=time().'_img.'.$request->file('categories_image')->getClientOriginalExtension();
            $file->move('website/upload/users/',$filename);  // use move for move image in public/images
            $update->categories_image=$filename;
        }
        $update->update();
        Alert::success('Category update','Category update Successfully');
        return redirect('/Manage_Categories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category,$id)
    {
        //Delete Category
        $data=category::find($id)->delete();
        Alert::success('Category Delete','Category Delete Successfully');
        return redirect('/Manage_Categories');
    }
   
}


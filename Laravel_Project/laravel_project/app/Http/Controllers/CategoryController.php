<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $insert->category_name=$request->categories_title;
        $file=$request->file('categories_image');
        $filename=time().'Category.'.$request->file('categories_image')->getClientOriginalExtension();
        $file->move('admin/img/Category/',$filename);
        $insert->category_image=$filename;

        $insert->save();
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
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}

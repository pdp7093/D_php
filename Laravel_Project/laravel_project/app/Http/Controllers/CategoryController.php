<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = category::all();
        return view('website.product', ['data' => $data]);
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

        $insert = new category();
        $insert->categories_title = $request->categories_title;
        $file = $request->file('categories_image');
        $filename = time() . 'Category.' . $request->file('categories_image')->getClientOriginalExtension();
        $file->move('admin/img/Category/', $filename);
        $insert->categories_image = $filename;
        $insert->save();
        Alert::success('Category Insert', 'Category Insert Successfully');
        return redirect('/Manage_Categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
        $data = category::all();
        return view('admin.manage_categories', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category, $id)
    {
        //
        $data = category::find($id);
        return view('admin.edit_categories', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category, $id)
    {
        //
        $update = category::find($id);

        $update->categories_title = $request->categories_title;
        if ($request->hasFile('categories_image')) {
            unlink('website/upload/users/' . $update->categories_image);
            $file = $request->file('categories_image');
            $filename = time() . '_img.' . $request->file('categories_image')->getClientOriginalExtension();
            $file->move('website/upload/users/', $filename);  // use move for move image in public/images
            $update->categories_image = $filename;
        }
        $update->update();
        Alert::success('Category update', 'Category update Successfully');
        return redirect('/Manage_Categories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category, $id)
    {
        //Delete Category
        $data = category::find($id)->delete();
        Alert::success('Category Delete', 'Category Delete Successfully');
        return redirect('/Manage_Categories');
    }
//--------------Api function-----------------------
    public function api_manage_category(category $category)
    {
        $data = category::all();
        return response()->json([
            "status" => 200,
            "category" => $data
        ]);
    }

    public function api_create_category(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'categories_title' => 'required|unique:categories|max:255',
            'categories_image' => 'required|image',
        ]);

        if ($validate->fails()) {
            return [
                'success' => 0,
                'message' => $validate->messages()
            ];
        } else {
            $insert = new category();
            $insert->categories_title = $request->categories_title;
            $file = $request->file('categories_image');
            $filename = time() . 'Category.' . $request->file('categories_image')->getClientOriginalExtension();
            $file->move('admin/img/Category/', $filename);
            $insert->categories_image = $filename;
            $insert->save();

            return response()->json([
                'status' => 200,
                'message' => 'Create Success'
            ]);
        }
    }

    public function api_category_delete($id)
    {
        $data = category::find($id)->delete();
        if (isset($data)) {
            return response()->json([
                'status' => 200,
                'message' => 'Delete Success',
            ]);
        }
        else
        {
            return response()->json([
               
                'message'=>'Category Not Available'
            ]);
        }
    }

    public function api_category_update(Request $request, $id)
    {
        $data = category::find($id);
        $data->categories_title = $request->categories_title;
        if ($request->hasFile('categories_image')) {
            unlink('website/upload/users/' . $data->categories_image);
            $file = $request->file('categories_image');
            $filename = time() . '_img.' . $request->file('categories_image')->getClientOriginalExtension();
            $file->move('website/upload/users/', $filename);  // use move for move image in public/images
            $data->categories_image = $filename;
        }
        $data->update();
        return response()->json([
            'status' => 200,
            'message' => 'Update Success',
        ]);
    }
}


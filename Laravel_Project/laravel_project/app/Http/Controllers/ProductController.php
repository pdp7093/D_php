<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
    }
    public function product_show($id)
    {
       $cid=$id;
      
       $data=product::where('cate_id','=',$cid)->get();
        return view('website.product_detail',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fk=category::all();
        
        return view('admin.add_products',['data'=>$fk]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'category'=>'required',
            'product_title' => 'required|unique:products|max:255',
            'product_price'=>'required',
            'product_weight'=>'required',
            'product_descp'=>'required',
            'qty'=>'required',
            'product_image' => 'required|image',
        ]);

        $insert=new product();

        $insert->cate_id=$request->category;
        $insert->product_title=$request->product_title;
        $insert->product_price=$request->product_price;
        $insert->product_weight=$request->product_weight;
        $insert->product_descp=$request->product_descp;
        $insert->p_qty=$request->qty;

        $file=$request->file('product_image');
        $filename=time().'Product.'.$request->file('product_image')->getClientOriginalExtension();
        $file->move('admin/img/Product/',$filename);
        $insert->product_image=$filename;

        $insert->save();
        Alert::success('Product Insert','Product Insert Successfully');
        return redirect('/Manage_Products');

    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        $data=product::join('categories','products.cate_id','=','categories.id')
            ->get(['products.*','categories.categories_title']);
        //$data=product::all();
        return view('admin.manage_products',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
        //
        $data=product::find($id)->delete();
        Alert::success('Delete Success','Product Delete Successfully');
        return redirect('/Manage_Products');
    }
}

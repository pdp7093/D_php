<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fk=product::all();
        
       // return view('admin.add_products',['data'=>$fk]);
        return view('website.index',['data'=>$fk]);
       
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
    public function edit(product $product,$id)
    {
        //
        $data=product::find($id);
        return view('admin.edit_products',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product,$id)
    {
        //
        $update=product::find($id);
       
        $update->product_title=$request->product_title;
        $update->product_price=$request->product_price;
        $update->product_weight=$request->product_weight;
        $update->product_descp=$request->product_descp;
        $update->p_qty=$request->qty;
        
        if($request->hasFile('product_image')) 
        {
            unlink('website/upload/customers/'.$update->product_image);
            $file=$request->file('product_image');		
            $filename=time().'_img.'.$request->file('product_image')->getClientOriginalExtension();
            $file->move('admin/img/Product/',$filename);  // use move for move image in public/images
            $update->product_image=$filename;
        }
        $update->update();
        Alert::success('Update Success', "Product Update Successful");
        return redirect('/Manage_Products');

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
    public function status($id)
    {
        $data=product::find($id);
        if($data->p_status=="Instock")
        {
            $data->p_status="Outstock";
            $data->update();
            Alert::success('Update Success', "Product Outstock Successful");
            return redirect('/Manage_Products');
        }
        else
        {
            $data->p_status="Instock";
            $data->update();
            Alert::success('Update Success', "Product Instock Successful");
            return redirect('/Manage_Products');
        }
    }


    //-----------------------Api Route -----------------------

    public function api_manage_product()
    {
        $data=product::join('categories','products.cate_id','=','categories.id')
            ->get(['products.*','categories.categories_title']);
        
        return response()->json([
            "status"=>200,
            "Product"=>$data
        ]);
    }

    public function api_create_product(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'category'=>'required',
            'product_title' => 'required|unique:products|max:255',
            'product_price'=>'required',
            'product_weight'=>'required',
            'product_descp'=>'required',
            'qty'=>'required',
            'product_image' => 'required|image',
        ]);
        if($validate->fails()){
            return [
                'success'=>0,
                'message'=>$validate->messages()
            ];
        }
        else
        {
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

        return response()->json([
            "status"=>200,
            "message"=>"Product Insert Successfully"
        ]);
        }
    }

}

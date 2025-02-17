<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class OrderController extends Controller
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
        $pro_id=$id;
        $data=product::find($pro_id);
        return view('website.order',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */                 
    public function store(Request $request)
    {
        //insert order
        $validated = $request->validate([
            
            'qty'=>'required|numeric',
        ]);
        $pro_id=$request->pro_id;
        $data=product::find($pro_id);
       $insert= new order;
       $insert->pro_id=$request->pro_id;
       $insert->cust_id=session('uid');
       $insert->o_qty=$request->qty;
       $insert->total_amount=$request->total;
       $insert->p_weight=$data->product_weight;
       $insert->address=$data->address;
       
       $insert->save();
       Alert::success('Order Placed','Order Placed Sucessfully');
       return redirect('/Profile');

    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
       
        $data=order::join('products','orders.pro_id','=','products.id')
                    ->join('customers','orders.cust_id','=','customers.id')
                    ->get(['orders.*','products.product_title','product_weight','customers.firstname','customers.lastname']);
        return view('admin.manage_orders',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */     
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order,$id)
    {
        //Delete Order Record
        $data=order::find($id)->delete();
        return redirect('/Manage_Orders');
    }
    public function status($id)
    {
        $data=order::find($id);
        if($data->o_status=="pending")
        {
            $data->o_status="deliverd";
            $data->update();
            Alert::success('Update Success', "User Status Successful");
            return redirect('/Manage_Orders');
        }
        else
        {
            $data->o_status="pending";
            $data->update();
            Alert::success('Update Success', "User Status  Successful");
            return redirect('/Manage_Orders');
        }
    }
}

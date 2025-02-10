<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Http\Controllers\Controller;
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
}

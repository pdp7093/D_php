<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
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
    public function store(Request $request, $id)
    {
        //
       
                $insert = new cart;
                $insert->pro_id = $id;
                $insert->cust_id = session('uid');

                $insert->c_qty = $request->qty;

                $insert->save();

               
                    Alert::success('Add to Cart', 'Product Added in Cart Sucessfully');
                    return redirect('/Profile');
                
        


    }

    /**
     * Display the specified resource.
     */
    public function show(cart $cart)
    {
        //
        $cart = cart::join('customers', 'customers.id', '=', 'carts.cust_id')
            ->join('products', 'products.id', '=', 'carts.pro_id')
            ->get(['products.*', 'carts.c_qty', 'carts.id','carts.pro_id']);
        return view('website.addtocart', ["cartItems" => $cart]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cart $cart, $id)
    {
        //
        $data = cart::find($id)->delete();
        Alert::success('Remove Cart', 'Successfully Remove Product From Cart ');
        return redirect('/ViewCart');
    }
}

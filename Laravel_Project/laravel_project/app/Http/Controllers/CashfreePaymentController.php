<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\customer;
use App\Models\order;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
class CashfreePaymentController extends Controller
{
    public function create(Request $request)
    {
        return view('website.payment-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'qty' => 'required|numeric',
            'address' => 'required',
        ]);
        $pro_id = $request->pro_id;
        $data = product::find($pro_id);
        $insert = new order;
        $insert->pro_id = $request->pro_id;
        $insert->cust_id = session('uid');
        $cust_id = session('uid');
        $cust = customer::find($cust_id);
        $qty = $data->p_qty - $request->qty;
        if ($qty == 0) {
            $data->p_qty = 0;
            $data->p_status = 'Outstock';
            $data->update();
        } elseif ($qty < 0) {
            Alert::error('Few Stock avaliable', "Stock qty is $data->p_qty");
            return redirect('/Categories');
        } else {
            $data->p_qty = $qty;
            $insert->o_qty = $request->qty;
            $data->update();
        }
        $insert->total_amount = $request->total;
        $insert->p_weight = $data->product_weight;
        $insert->address = $request->address;
        $orderAmount = preg_replace('/[^0-9.]/', '', $request->total); // sirf number aur dot allow


        //add to cart order

        $cart_id = $request->cart_id;
        if (isset($cart_id)) {
            $cart = cart::find($cart_id);
            $total = $data->p_qty - $cart->c_qty;
            if ($total == 0) {
                $data->p_qty = $total;
                $data->p_status = 'Outstock';
                $data->update();
            }
            $data->p_qty = $total;
            $data->update();
            
        }
        cart::find($cart_id)->delete();
        //end of cart order




        $url = "https://sandbox.cashfree.com/pg/orders";

        $headers = array(
            "Content-Type: application/json",
            "x-api-version: 2022-01-01",
            "x-client-id: " . env('CASHFREE_API_KEY'),
            "x-client-secret: " . env('CASHFREE_API_SECRET')
        );

        $data = json_encode([
            'order_id' => 'order_' . rand(1111111111, 9999999999),
            'order_amount' => (float) $orderAmount,
            "order_currency" => "INR",
            "customer_details" => [
                "customer_id" => 'customer_' . rand(111111111, 999999999),
                "customer_name" => $cust->firstname.$cust->lastname,
                "customer_email" => $cust->email,
                "customer_phone" => (string) $cust->mobile,
                
            ],
            "order_meta" => [
                    "return_url" => 'http://127.0.0.1:8000/cashfree/payments/success/?order_id={order_id}&order_token={order_token}'
                ]
        ]);

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $resp = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($resp);
        //dd($response);
        $insert->save();
       
        return redirect()->to(json_decode($resp)->payment_link);

    }

    public function success(Request $request)
    {
        alert::success('Orde Placed Success', 'Your Order Placed Successfully');
        return redirect('/Profile');
        /* array:2 [▼ // app\Http\Controllers\CashfreePaymentController.php:123
   "order_id" => "order_9182610253"
   "order_token" => "cA5KAkQJRoiqUNLvnq0A"
 ]*/

 
    }
}

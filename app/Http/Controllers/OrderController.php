<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Restaurant;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', Auth::id())->get();

        $restaurants_ids = $restaurants->pluck('id')->toArray();

        $orders = Order::whereIn('restaurant_id', $restaurants_ids)->get();

        return view('dashboard.dashboard', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->restaurant_id = $request->restaurant_id;
        $order->customer_name = $request->customer['name'];
        $order->customer_surname = $request->customer['lastname'];
        $order->email = $request->customer['email'];
        $order->city = $request->customer['city'];
        $order->address = $request->customer['address'];
        $order->phone_number = $request->customer['number'];
        $order->amount = $request->amount;
        $order->save();

        foreach($request->plates as $plate) {
            $order->plates()->attach($plate['id'], ["quantity"=>$plate["qty"]]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('dashboard.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return ['response' => 'Order canceled successfully!'];
    }

    public function generateToken(Request $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();

        $data = [
            'token' => $token
        ];

        return response()->json($data);
    }

    public function payment(Request $request, Gateway $gateway)
    {
        $result = $gateway->transaction()->sale([
            'amount' => $request->amount,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        if($result->success) {
            $this->store($request);
        }
        else
            return response()->json(['message', 'the transaction has been failed'], 404);
    }
}

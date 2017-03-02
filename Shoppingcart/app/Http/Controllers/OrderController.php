<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Cart;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cart.list');

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
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save trong bang order
        $order = new Order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->status = 0;
        $order->save();

        $totalAmount = 0;
        //save trong bang order_detail
        foreach (Cart::content() as $item){
            $detail = new OrderDetail();
            $detail->product_id = $item->id;
            $detail->order_id = $order->id;
            $detail->quantity = $item->qty;
            $detail->price = $item->price;
            $detail->amount = $item->subtotal;
            $detail->save();
            $totalAmount += $item->subtotal;
        }

        $order->total = $totalAmount;
        $order->save();

        //huy gio hang
        Cart::destroy();
        Session::flash('add_cart', 'Da mua thanh cong');
        return redirect('cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

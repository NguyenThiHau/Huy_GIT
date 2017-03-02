<?php

namespace App\Http\Controllers;

use Session;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
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
        //
        $id = $request->id;
        $title = $request->title;
        $price = $request->price;
        $image = $request->thumbnail;
        $quantity = $request->qty;

        Cart::add($id, $title, $quantity, $price, ['image' => $image]);
        Session::flash('add_cart', 'Them san pham vao gio hang');

        return redirect('/');
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
        if ($request->qty >= 1) {
            foreach (Cart::content() as $item) {
                if ($item->id == $id) {
                    Cart::update($item->rowId, ['qty' => $request->qty]);
                    break;
                }
                //print_r($item);
            }
            Session::flash('add_cart', 'Cap nhap so luong thanh cong');
        } else {
            Session::flash('add_cart', 'So luong phai >=1');
        }
        return redirect('cart');
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
        foreach (Cart::content() as $item) {
            if ($item->id == $id) {
                Cart::remove($item->rowId);
                break;
            }
        }
        Session::flash('add_cart', 'Xoa hang thanh cong');
        return redirect('cart');
    }
}

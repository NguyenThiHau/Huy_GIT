<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['list'] = Product::all();
        return view('product.index', $data);
    }

    public function create()
    {
        return view('product.create');
    }
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'image' => 'required',
            'price' => 'required|numeric',
            'categories_id' => 'required|numeric'
        );

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \Redirect::to('product/create')->withErrors($validator);
        } else {
            $pro = new Product();
            $pro->name = $request->input('name');
            $pro->price = $request->input('price');
            $pro->image = $request->input('image');
            $pro->categories_id = $request->input('categories_id');
            $pro->dob = $request->input('dob');
            $pro->total = 0;
            $pro->status = 1;
            $pro->save();

            \Session::flash('message', 'Tao moi thanh cong !');
            return \Redirect::to('product');
        }
    }
}

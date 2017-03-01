<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $keyword = '';
        if ($keyword = $request->search) {
            $data = Product::where('name', 'like', "%$keyword%")->get();
        } else {
            $data = Product::all();
        }
        return view('product.list', ['data' => $data, 'keyword' => $keyword]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
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
        $rules = array(
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'product' => 'required',
            'screen' => 'required',
            'camera' => 'required',
            'chip' => 'required',
            'ram' => 'required',
            'image' => 'required',
        );

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \Redirect::to('product/create')->withErrors($validator);
        } else {
            $fileName = $request->file('image')->getClientOriginalName();
            $filePath = public_path('/products/');
            $request->file('image')->move($filePath, $fileName);

            $pro = new Product();
            $pro->name = $request->input('name');
            $pro->description = $request->input('description');
            $pro->price = $request->input('price');
            $pro->product = $request->input('product');
            $pro->screen = $request->input('screen');
            $pro->camera = $request->input('camera');
            $pro->chip = $request->input('chip');
            $pro->ram = $request->input('ram');
            $pro->image = $fileName;
            $pro->save();

            \Session::flash('message', 'Created successfully');
            return \Redirect::to('product');
        }
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
        $product = Product::find($id);
        return view('product.edit', ['product' => $product]);
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
    {//
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $filePath = public_path('/products/');
            $request->file('image')->move($filePath, $fileName);

            $pro = Product::find($id);
            $pro->name = $request->name;
            $pro->description = $request->description;
            $pro->price = $request->price;
            $pro->product = $request->product;
            $pro->screen = $request->screen;
            $pro->camera = $request->camera;
            $pro->chip = $request->chip;
            $pro->ram = $request->ram;
            $pro->image = $request->file('image')->getClientOriginalName();
            $pro->save();
        }
        return \Redirect::to('product');
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
        $pro = Product::find($id);
        $pro->delete();
        return \Redirect::to('product');
    }
}

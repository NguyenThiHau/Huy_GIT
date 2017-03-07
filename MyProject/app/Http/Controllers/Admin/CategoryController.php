<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = Category::all();
        return view('admin.category.list', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        //
        $rules = array(
            'name' => 'required',
            'images' => 'required',
            'type' => 'required',
        );
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \Redirect::to('admin/category/create')->withErrors($validator);
        } else {
            $fileName = $request->file('images')->getClientOriginalName();
            $filePath = public_path('/images/');
            $request->file('images')->move($filePath, $fileName);

            $pro = new Category();
            $pro->name = $request->name;
            $pro->slug = $request->slug;
            $pro->images = $fileName;
            $pro->sort = $request->sort;
            $pro->meta_title = $request->meta_title;
            $pro->meta_keywords = $request->meta_keywords;
            $pro->type = $request->type;
            $pro->status = $request->status;
            $pro->save();
            Session::flash('success', 'Created Category Successfully!');
        }
        return redirect('admin/category');
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

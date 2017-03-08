<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use App\Category;
use Session;

class CategoryController extends Controller
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
        if ($request->get('keyword')) {
            $keyword = $request->get('keyword');
            $list = Category::where('name', 'LIKE', '%' . $keyword . '%')->paginate(2);
        } else {
            $list = Category::paginate(2);
        }
        return view('admin.category.list', compact('list', 'keyword'));
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
            'type' => 'numeric'
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
        $list = Category::where('id', $id)->first();

        return view('admin.category.show', compact('list'));
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
        $list = Category::findOrFail($id);
        return view('admin.category.edit', compact('list'));
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
        $list = Category::find($id);
        if ($request->hasFile('images')) {
            $fileName = $request->file('images')->getClientOriginalName();
            $filePath = public_path('/images/');
            $request->file('images')->move($filePath, $fileName);
            $list->images = $request->file('images')->getClientOriginalName();
        }
        $list->name = $request->name;
        $list->slug = $request->slug;
        $list->sort = $request->sort;
        $list->meta_title = $request->meta_title;
        $list->meta_keywords = $request->meta_keywords;
        $list->type = $request->type;
        $list->status = $request->status;
        $list->save();
        Session::flash('success', 'Edit Category Successfully!');
        return redirect('admin/category');
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
        $list = Category::findOrFail($id);
        if ($list) {
            $list->delete();
        }
        Session::flash('success', 'Deleted "' . $list->title . '" successfully');
        return redirect('admin/category');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $list = Image::all();
        $keyword = '';
        if ($request->get('keyword')) {
            $keyword = $request->get('keyword');
            $list = Image::where('name', 'like', $keyword . '%')->get();
        } else {
            $list = Image::all();
        }
        return view('admin.upload.list', compact('list', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.upload.create');
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
            'size' => 'required',
            'url' => 'required',
            'type' => 'required',
            'product_id' => 'required|numeric',
        );
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \Redirect::to('admin/image/create')->withErrors($validator);
        } else {
            $fileName = $request->file('url')->getClientOriginalName();
            $filePath = public_path('/images/');
            $request->file('url')->move($filePath, $fileName);

            $pro = new Image();
            $pro->name = $request->name;
            $pro->size = $request->size;
            $pro->url = $fileName;
            $pro->type = $request->type;
            $pro->product_id = $request->product_id;
            $pro->save();
            Session::flash('success', 'Created Image Successfully!');
        }
        return redirect('admin/image');
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
        $pro = Image::findOrFail($id);
        return view('admin.upload.edit', compact('pro'));
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
        $pro = Image::find($id);
        if ($request->hasFile('url')) {
            $fileName = $request->file('url')->getClientOriginalName();
            $filePath = public_path('/images/');
            $request->file('url')->move($filePath, $fileName);
            $pro->url = $request->file('url')->getClientOriginalName();
        }
        $pro->name = $request->name;
        $pro->size = $request->size;
        $pro->type = $request->type;
        $pro->product_id = $request->product_id;
        $pro->save();
        Session::flash('success', 'Edit image successfully!');
        return redirect('admin/image');
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
        $row = Image::findOrFail($id);
        if ($row) {
            $row->delete();
        }
        Session::flash('success', 'Deleted "' . $row->name . '" successfully');
        return redirect('admin/image');
    }
}

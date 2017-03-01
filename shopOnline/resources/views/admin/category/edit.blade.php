@extends('layouts.admin')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Category "{{$cate->title}}"</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Category
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open([
                                    'method'=>'PATCH',
                                    'url'=>['admin/category', $cate->id],
                                    'role'=>'form']) !!}
                                <div class="form-group">
                                    <label for="txtTitle">Category Name:</label>
                                    <input name="title" id="txtTitle" class="form-control" value="{{$cate->title}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-success red" href="{{url('admin/category')}}">
                                    Cancel
                                </a>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>
    <!-- end page-wrapper -->
@endsection

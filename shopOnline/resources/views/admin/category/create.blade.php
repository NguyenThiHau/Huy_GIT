@extends('layouts.admin')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Create Category</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create New Category
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['method'=>'POST','url'=>'admin/category','role'=>'form']) !!}
                                <div class="form-group">
                                    <label for="txtTitle">Category Name:</label>
                                    <input name="title" id="txtTitle" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Create category</button>
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

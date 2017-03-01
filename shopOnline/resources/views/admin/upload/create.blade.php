@extends('layouts.admin')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Create Image</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create New Image
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{--THEM STYLE CHO THANH ERROR--}}
                                @foreach($errors->all() as $error)
                                    <p style="color: red">{{ $error }}</p>
                                @endforeach
                                {!! Form::open(['method'=>'POST','url'=>'admin/image','role'=>'form','files'=>true]) !!}
                                <div class="form-group">
                                    {{Form::label('name','Name')}}
                                    {{Form::text('name',Request::old('name'),array('class'=>'item'))}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('size','Size')}}
                                    {{Form::text('size',Request::old('size'),array('class'=>'item'))}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('type','Type')}}
                                    {{Form::text('type',Request::old('type'),array('class'=>'item'))}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('product_id','Product ID')}}
                                    {{Form::text('product_id',Request::old('product_id'),array('class'=>'item'))}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('url','Image')}}
                                    {{Form::file('url',Request::old('url'),array('class'=>'item'))}}
                                </div>
                                <button type="submit" class="btn btn-primary">Create image</button>
                                <a class="btn btn-success red" href="{{url('admin/image')}}">
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

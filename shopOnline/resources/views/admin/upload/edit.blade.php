@extends('layouts.admin')

@section('content')
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Image "{{$pro->title}}"</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Image
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['method'=>'PATCH','url'=>['admin/image', $pro->id],'role'=>'form','files'=>true]) !!}
                                <div class="form-group">
                                    {{Form::label('name','Name')}}
                                    <input type="text" name="name" value="{{$pro->name}}"/>
                                </div>
                                <div class="form-group">
                                    {{Form::label('size','Size')}}
                                    <input type="text" name="size" value="{{$pro->size}}"/>
                                </div>
                                <div class="form-group">
                                    {{Form::label('type','Type')}}
                                    <input type="text" name="type" value="{{$pro->type}}"/>
                                </div>
                                <div class="form-group">
                                    {{Form::label('product_id','Product_id')}}
                                    <input type="text" name="product_id" value="{{$pro->product_id}}"/>
                                </div>
                                <div class="form-group">
                                    {{Form::label('url','Image')}}
                                    <div>
                                        <img src="{{url('images/')}}/{{$pro->url}}" alt="" WIDTH="100"/>
                                    </div>
                                    <input type="file" name="url" value="{{$pro->url}}"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit image</button>
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

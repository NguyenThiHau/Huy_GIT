@extends('layouts.admin')

@section('content')
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <!-- END SAMPLE FORM PORTLET-->
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-blue-sharp"></i>
                <span class="caption-subject font-blue-sharp bold uppercase">Create Category</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-trash"></i>
                </a>
            </div>
        </div>
        <div class="portlet-body form">
            <div class="form-body">
                {!! Form::open(['method'=>'POST','url'=>'admin/category','role'=>'form','files'=>true]) !!}
                @foreach($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name='name' class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name='slug' class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="images">
                </div>
                <div class="form-group">
                    <label>Sort</label>
                    <input type="text" name='sort' class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Meta title</label>
                    <input type="text" name='meta_title' class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Meta keywords</label>
                    <input type="text" name='meta_keywords' class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name='type' class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name='status' class="form-control input-lg">
                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn btn-primary">Create category</button>
                    <a class="btn btn-success red" href="{{url('admin/category')}}">
                        Cancel
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

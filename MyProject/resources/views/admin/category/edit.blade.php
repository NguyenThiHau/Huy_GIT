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
                {!! Form::open(['method'=>'PATCH','url'=>['admin/category',$list->id],'role'=>'form','files'=>true]) !!}
                {{--HAM BAO LOI VALIDATOR--}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name='name' value="{{$list->name}}" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name='slug' value="{{$list->slug}}" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div>
                        <img src="{{url('images/')}}/{{$list->images}}" alt="" WIDTH="100"/>
                    </div>
                    <input type="file" name="images" value="{{$list->images}}">
                </div>
                <div class="form-group">
                    <label>Sort</label>
                    <input type="text" name='sort' value="{{$list->sort}}" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Meta title</label>
                    <input type="text" name='meta_title' value="{{$list->meta_title}}" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Meta keywords</label>
                    <input type="text" name='meta_keywords' value="{{$list->meta_keywords}}"
                           class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name='type' value="{{$list->type}}" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name='status' value="{{$list->status}}" class="form-control input-lg">
                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn btn-primary">Edit category</button>
                    <a class="btn btn-success red" href="{{url('admin/category')}}">
                        Cancel
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')
@section('content')
    <div id="detailModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    {{--KHU VUC TRUYEN AJAX--}}
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Dashboard</span>
            </li>

        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body"
                 data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp;
                <span class="thin uppercase hidden-xs"></span>&nbsp;
                <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Category
        <small>Category</small>
    </h3>
    @if(Session::has('success'))
        <div class="row">
            <!-- Welcome -->
            <div class="col-lg-12">
                <div class="alert alert-info">
                    <i class="fa fa-folder-open"></i>
                    <b>{{Session::get('success')}}</b>
                </div>
            </div>
            <!--end  Welcome -->
        </div>
    @endif

    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div>
    </div>
    {!! Form::open(['method'=>'GET','url'=>'admin/category']) !!}
    <div class="actions">
        <div class="portlet-input input-inline">
            <div class="input-icon right">
                <i class="icon-magnifier"></i>
                <input class="form-control input-circle" placeholder="search..." type="text" value="{{$keyword}}"
                       name="keyword">
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <br>
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-comments"></i>Category Table
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>

        <div class="portlet-body">
            <a href="{{url('admin/category/create')}}" class="btn green-meadow " type="button">Create</a>

            <div class="table-scrollable">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th> #</th>
                        <th> Name</th>
                        <th> Slug</th>
                        <th> Images</th>
                        <th> Sort</th>
                        <th> Meta_title</th>
                        <th> Meta_Keywords</th>
                        <th> Type</th>
                        <th> Status</th>
                        <th> Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($list)
                        @foreach($list as $key => $item)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td>
                                    <img src="{{url('images/')}}/{{$item->images}}" alt="" WIDTH="100"/>
                                </td>
                                <td>{{$item->sort}}</td>
                                <td>{{$item->meta_title}}</td>
                                <td>{{$item->meta_keywords}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url'=>['admin/category',$item->id]
                                    ]) !!}
                                    <a href="javascript:void(0);" onclick="showDetail({{ $item->id }})"
                                       class="btn btn-default green">View</a>
                                    <a href="{{url('admin/category/'.$item->id.'/edit')}}"
                                       class="btn btn-primary">Edit</a>
                                    <button type="submit" onclick="return confirm('Are you sure?'); "
                                            class="btn btn-success red">
                                        Delete
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                {{--HAM TAO PAGINATION--}}
                {{ $list->appends(Request::only('keyword'))->links() }}
            </div>
        </div>
    </div>
    <!-- END SAMPLE TABLE PORTLET-->
@endsection

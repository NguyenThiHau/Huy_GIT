<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Category Form</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-12">
                <table id="user" class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <td style="width:15%"> Name</td>
                        <td style="width:50%">
                            <a>{{$list->name}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Slug</td>
                        <td style="width:50%">
                            <a>{{$list->slug}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Image</td>
                        <td style="width:50%">
                            <img src="{{url('images/')}}/{{$list->images}}" alt="" WIDTH="100"/>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Type</td>
                        <td style="width:50%">
                            <a>{{$list->type}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:15%"> Status</td>
                        <td style="width:50%">
                            <a>{{$list->status}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

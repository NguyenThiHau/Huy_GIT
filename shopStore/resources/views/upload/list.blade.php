<table border="1">
    <tr>
        <th>ID</th>
        <th>Image</th>
    </tr>
    @if($data)
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>
                    <img src="{{url('uploads/')}}/{{$item->file_name}}" alt="" WIDTH="100"/>
                </td>
            </tr>
        @endforeach
    @endif
</table>

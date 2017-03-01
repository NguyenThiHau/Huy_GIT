@if(Session::has('message'))
    <div class="message">{{Session::get('message')}}</div>
@endif
<a href="{{URL::to('product/create')}}">Back</a>
{!! Form::open(['method' => 'get','url' => 'product', 'class' => '']) !!}
<input type="text" name="search" value="{{ $keyword }}">
<input type="submit" name="btnSearch" value="Seach">
{!! Form::close() !!}
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Product</th>
        <th>Screen</th>
        <th>Camera</th>
        <th>Chip</th>
        <th>Ram</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @if($data)
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->product}}</td>
                <td>{{$item->screen}}</td>
                <td>{{$item->camera}}</td>
                <td>{{$item->chip}}</td>
                <td>{{$item->ram}}</td>
                <td>
                    <img src="{{url('products/')}}/{{$item->image}}" alt="" WIDTH="100"/>
                </td>
                <td>
                    <a href="product/edit/{{$item->id}}">Edit</a>
                    <a href="product/delete/{{$item->id}}" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
</table>

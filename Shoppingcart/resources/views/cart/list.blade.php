@extends('layouts.app')

@section('content')
    <h2 style="margin-left: 20%;text-align: left">Gio hang cua ban</h2>
    <table border="1" style="width:40%;margin: auto;text-align: center">
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Delete</th>
        </tr>
        @foreach(Cart::content() as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>
                    {!!  Form::open(['method'=>'PATCH','url'=>['cart',$item->id]])!!}
                    <input type="text" name="qty" value="{{$item->qty}}" class="update-qty">
                    <input type="submit" value="Update">
                    {!!  Form::close()!!}
                </td>
                <td>{{number_format($item->price)}} VND</td>
                <td>{{number_format($item->subtotal)}} VND</td>
                <td>
                    {!!  Form::open(['method'=>'DELETE','url'=>['cart',$item->id]])!!}
                    <button type="submit">Delete</button>
                    {!!  Form::close()!!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="6">Total:<span style="color: red;font-weight: bold">{{Cart::subtotal()}} VND</span>
            </td>
        </tr>
    </table>
    <div style="width:80%;display: block;margin: auto">
        <h2>Thanh toan</h2>
        {!! Form::open(['method'=>'POST','url'=>'order']) !!}
        <label>Name </label><input type="text" name="name"/><br>
        <label>Phone </label><input type="text" name="phone"/><br>
        <label>Email </label><input type="text" name="email"/><br>
        <label>Address </label><input type="text" name="address"/><br>
        {!! Form::submit('Buy') !!}
        {!! Form::close() !!}
    </div>
@endsection

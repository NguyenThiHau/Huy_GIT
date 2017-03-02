@extends('layouts.app')

@section('content')
    <div id="products">
        @if($products)
            @foreach($products as $product)
                <div class="item">
                    <p class="title">{{$product->title}}</p>
                    <p class="price">Price: {{$product->price}} VND</p>
                    <p><img src="{{url('uploads/product/'.$product->thumbnail)}}" alt=""/></p>
                    <p class="desc">Description: {{$product->description}}</p>

                    {!! Form::open(['method'=>'POST','url'=>'cart']) !!}
                    <p>
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="title" value="{{$product->title}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <input type="hidden" name="thumbnail" value="{{$product->thumbnail}}">
                        <input type="hidden" name="description" value="{{$product->description}}">
                        So luong: <input type="text" name="qty" value="1"/>
                        <button type="submit">Buy now</button>
                    </p>
                    {!! Form::close() !!}
                </div>
            @endforeach
        @endif
    </div>
@endsection

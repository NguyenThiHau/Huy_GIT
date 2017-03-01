<a href="{{URL::to('product')}}">View all product</a>

<h2>Edit Product</h2>
{{Html::ul($errors->all())}}

{!! Form::open(['method'=>'PATCH','url'=>'product/'.$product->id,'class'=> '','files'=>true]) !!}
<div>
    {{Form::label('name','Name')}}
    <input type="text" name="name" value="{{$product->name}}"/>
</div>
<div>
    {{Form::label('description','Description')}}
    <input type="text" name="description" value="{{$product->description}}"/>
</div>
<div>
    {{Form::label('price','Price')}}
    <input type="text" name="price" value="{{$product->price}}"/>
</div>
<div>
    {{Form::label('product','Product')}}
    <input type="text" name="product" value="{{$product->product}}"/>
</div>
<div>
    {{Form::label('screen','Screen')}}
    <input type="text" name="screen" value="{{$product->screen}}"/>
</div>
<div>
    {{Form::label('camera','Camera')}}
    <input type="text" name="camera" value="{{$product->camera}}"/>
</div>
<div>
    {{Form::label('chip','Chip')}}
    <input type="text" name="chip" value="{{$product->chip}}"/>
</div>
<div>
    {{Form::label('ram','Ram')}}
    <input type="text" name="ram" value="{{$product->ram}}"/>
</div>
<div>
    {{Form::label('image','Image')}}
    <div>
        <img src="{{url('products/')}}/{{$product->image}}" alt="" WIDTH="100"/>
    </div>
    <input type="file" name="image" value="{{$product->image}}"/>
</div>
<div>
    <input type="submit" name="btnEdit" value="Edit"/>
</div>
{!! Form::close() !!}


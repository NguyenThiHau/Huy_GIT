<a href="{{URL::to('product')}}">View all product</a>

<h2>Upload Product</h2>
{{Html::ul($errors->all())}}

{!! Form::open(['url'=>'product','class'=> '','files'=>true]) !!}
<div>
    {{Form::label('name','Name')}}
    {{Form::text('name',Request::old('name'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('description','Description')}}
    {{Form::text('description',Request::old('description'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('price','Price')}}
    {{Form::text('price',Request::old('price'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('product','Product')}}
    {{Form::text('product',Request::old('product'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('screen','Screen')}}
    {{Form::text('screen',Request::old('screen'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('camera','Camera')}}
    {{Form::text('camera',Request::old('camera'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('chip','Chip')}}
    {{Form::text('chip',Request::old('chip'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('ram','Ram')}}
    {{Form::text('ram',Request::old('ram'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('image','Image')}}
    {{Form::file('image',Request::old('image'),array('class'=>'item'))}}
</div>
<div>
    <input type="submit" name="btnCreate" value="Create"/>
</div>
{!! Form::close() !!}


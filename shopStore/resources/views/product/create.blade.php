<a href="{{URL::to('product')}}">View all product</a>

<h1>Create new product</h1>

{{Html::ul($errors->all())}}

{{Form::open(array('action'=>array('ProductController@store')))}}
<div>
    {{Form::label('name','Product Name')}}
    {{Form::text('name',Request::old('name'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('price','Price')}}
    {{Form::text('price',Request::old('price'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('image','Image')}}
    {{Form::text('image',Request::old('image'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('categories_id','Category')}}
    {{Form::text('categories_id',Request::old('categories_id'),array('class'=>'item'))}}
</div>
<div>
    {{Form::label('dob','Date of birth')}}
    {{Form::input('date','dob',date("d-m-Y"),array('class'=>'item'))}}
</div>

{{Form::submit('Create',array())}}
{{Form::close()}}

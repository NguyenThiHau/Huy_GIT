<h2>Upload Image</h2>
{!! Form::open(['url'=>'upload','class'=> '','files'=>true]) !!}

<input type="file" name="image"/>
<input type="submit" name="btnUpload" value="Upload"/>
{!! Form::close() !!}

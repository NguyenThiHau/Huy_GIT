@if(Session::has('message'))
    <div class="message">{{Session::get('message')}}</div>
@endif
<a href="{{URL::to('product/create')}}">Back</a>
<ul>
    @foreach($list as $item)
        <li>{{$item->name}}</li>
        <li>{{$item->price}}</li>
        <li>{{$item->image}}</li>
        <li>{{$item->categories_id}}</li>
        <li>{{$item->dob}}</li>
    @endforeach
</ul>

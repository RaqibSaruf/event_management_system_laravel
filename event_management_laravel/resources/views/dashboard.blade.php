@extends('layouts.main')
@section('content')

<div class="container">
	<div class="list-group">
    	<a href="{{ route('slider')}}" class="list-group-item list-group-item-action">Slider</a>
    	<a href="#" class="list-group-item list-group-item-action">Action item</a>
    	<a href="#" class="list-group-item list-group-item-action">Action item</a>
    	<a href="#" class="list-group-item list-group-item-action">Action item</a>
    	<a href="#" class="list-group-item list-group-item-action">Action item</a>
	</div>
</div>


@endsection
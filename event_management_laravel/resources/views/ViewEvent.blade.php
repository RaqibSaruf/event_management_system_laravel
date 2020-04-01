@extends('layouts.main')
@section('content')

@if( $l_event )

<div class="container">
<div class="jumbotron">
	<div class="text-sm-center">
		@foreach($image as $img)

		<img class="img-thumbnail center-block w-25"  src="{{ asset('public/uploads/latest_event/' .$img->image) }}" alt="{{ $l_event->title }}">

		@endforeach
	</div>

	<h4 class="h4-responsive mt-3"><b>{{ $l_event->title }}</b></h4>
	<p>@lang($l_event->description)</p>

</div>
</div>

@endif

@if( $up_event )

<div class="container">
<div class="jumbotron">
	<div class="text-sm-center">
		<img class="img-thumbnail center-block w-25"  src="{{ asset('public/uploads/upcoming_event/' .$up_event->image) }}" alt="{{ $up_event->title }}">
	</div>

	<h4 class="h4-responsive mt-3"><b>{{ $up_event->title }}</b></h4>
	<p>@lang($up_event->description)</p>

</div>
</div>

@endif

@endsection
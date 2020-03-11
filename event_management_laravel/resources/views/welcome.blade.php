@extends('layouts.main')
@section('content')

<div class="cyan darken-1">
<!--slider section-->
	<div class="container">
<!--Carousel Wrapper-->
		<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  			<ol class="carousel-indicators">
    			@foreach( $Sliders as $slider )
      			<li data-target="#carousel-example-2" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
   				@endforeach
  			</ol>
  <!--/.Indicators-->
  <!--Slides-->
  	<div class="carousel-inner" role="listbox">
  		@foreach( $Sliders as $slider )
       		<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
       			<div class="view">
           		<img class="center-block w-100" style="height: 350px;" src="{{ asset('public/uploads/slider/' .$slider->image) }}" alt="{{ $slider->title }}">
           		<div class="mask rgba-black-light"></div>
      			</div>
              	<div class="carousel-caption d-none d-md-block">
                 	<h3 class="h3-responsive">{{ $slider->title }}</h3>
              	</div>
       		</div>
    	@endforeach 
  	</div>
  <!--/.Slides-->
  <!--Controls-->
  		<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
  <!--/.Controls-->
		</div>
<!--/.Carousel Wrapper-->
	</div>
<!-- END slider section-->

<br>

<!-- Content Section -->
<div class="cyan darken-2">

	<div class="container">
	
		<div class="table-responsive-sm">
			<table id="dtBasicExample" class="table table-bordered table-sm table-hover text-sm-center" cellspacing="0" width="100%">
				<h2>Latest Events</h2>
			  <thead>
			    <tr>
			      <th class="th-sm">Name

			      </th>
			      <th class="th-sm">Position

			      </th>
			      <th class="th-sm">Office

			      </th>
			      <th class="th-sm">Age

			      </th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td class="td-sm">Tiger Nixon</td>
			      <td class="td-sm">System Architect</td>
			      <td class="td-sm">Edinburgh</td>
			      <td class="td-sm">61</td>
			  	</tr>
			  	<tr>
			      <td class="td-sm">Tiger Nixon</td>
			      <td class="td-sm">System Architect</td>
			      <td class="td-sm">Edinburgh</td>
			      <td class="td-sm">61</td>
			  	</tr>
			  	<tr>
			      <td class="td-sm">Tiger Nixon</td>
			      <td class="td-sm">System Architect</td>
			      <td class="td-sm">Edinburgh</td>
			      <td class="td-sm">61</td>
			  	</tr>
			  </tbody>
			</table>
		</div>
	
	</div>
</div>
<!-- END Content Section -->

</div>

@endsection



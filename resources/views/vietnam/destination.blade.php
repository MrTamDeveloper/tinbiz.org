@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/1413603891-booking.jpg', 'BOOKING TOUR', ['class' => 'img-responsive']) !!}
		@include('module.findyourstrip')
	</div>
	<div class="container" id="reviews">
		<h1 class="page-title">{{ $destination }} TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ url() }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="{{ url('customized-tours') }}" class="active">
				<span itemprop="title">{{ $destination }} tours</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<section class="getlist">
				    <h3 class="h5active" style="border-top-width: 0px;">Destinations</h3>
				    <ul>
				        <li><a title="Northern Vietnam" href="{{ url('vietnam/destination/northern') }}">» Northern Vietnam</a></li>
				        <li><a title="Hanoi" href="{{ url('vietnam/destination/ha-noi') }}">» Hanoi</a></li>
				        <li><a title="Halong Bay" href="{{ url('vietnam/destination/ha-long') }}">» Halong Bay</a></li>
				        <li><a title="Sapa" href="{{ url('vietnam/destination/sapa') }}">» Sapa</a></li>
				        <li><a title="Ho Chi Minh City" href="{{ url('vietnam/destination/ho-chi-minh') }}">» Ho Chi Minh City</a></li>
				        <li><a title="Southern Vietnam" href="{{ url('vietnam/destination/southern') }}">» Southern Vietnam</a></li>
				        <li><a title="Hue" href="{{ url('vietnam/destination/hue') }}">» Hue</a></li>
				        <li><a title="Da Nang" href="{{ url('vietnam/destination/da-nang') }}">» Da Nang</a></li>
				        <li><a title="Hoi An" href="{{ url('vietnam/destination/hoi-an') }}">» Hoi An</a></li>
				        <li><a title="Nha Trang" href="{{ url('vietnam/destination/nha-trang') }}">» Nha Trang</a></li>
				        <li><a title="Central Vietnam" href="{{ url('vietnam/destination/central') }}">» Central Vietnam</a></li>
				        <li><a title="Mekong Delta" href="{{ url('vietnam/destination/mekong-delta') }}">» Mekong Delta</a></li>
				    </ul>
				    <h3>Length of Stay</h3>
				    <ul style="display: none;">
				        <li><a href="./tours-in-vietnam-1day.html" title="Tours in Vietnam 1 day">» Tours in Vietnam 1 day</a></li>
				        <li><a href="./tours-in-vietnam-2days.html" title="Tours in Vietnam 2 days">» Tours in Vietnam 2 days</a></li>
				        <li><a href="./tours-in-vietnam-3days.html" title="Tours in Vietnam 3 days">» Tours in Vietnam 3 days</a></li>
				        <li><a href="./tours-in-vietnam-4days.html" title="Tours in Vietnam 4 days">» Tours in Vietnam 4 days</a></li>
				        <li><a href="./tours-in-vietnam-5days.html" title="Tours in Vietnam 5 days">» Tours in Vietnam 5 days</a></li>
				        <li><a href="./tours-in-vietnam-6days.html" title="Tours in Vietnam 6 days">» Tours in Vietnam 6 days</a></li>
				        <li><a href="./tours-in-vietnam-7days.html" title="Tours in Vietnam 7 days">» Tours in Vietnam 7 days</a></li>
				        <li><a href="./tours-in-vietnam-8days.html" title="Tours in Vietnam 8 days">» Tours in Vietnam 8 days</a></li>
				        <li><a href="./tours-in-vietnam-9days.html" title="Tours in Vietnam 9 days">» Tours in Vietnam 9 days</a></li>
				        <li><a href="./tours-in-vietnam-10days.html" title="Tours in Vietnam 10 days">» Tours in Vietnam 10 days</a></li>
				        <li><a href="./tours-in-vietnam-11days.html" title="Tours in Vietnam 11 days">» Tours in Vietnam 11 days</a></li>
				        <li><a href="./tours-in-vietnam-12days.html" title="Tours in Vietnam 12 days">» Tours in Vietnam 12 days</a></li>
				        <li><a href="./tours-in-vietnam-13days.html" title="Tours in Vietnam 13 days">» Tours in Vietnam 13 days</a></li>
				        <li><a href="./tours-in-vietnam-14days.html" title="Tours in Vietnam 14 days">» Tours in Vietnam 14 days</a></li>
				        <li><a href="./tours-in-vietnam-15days.html" title="Tours in Vietnam 15 days">» Tours in Vietnam 15 days</a></li>
				        <li><a href="./tours-in-vietnam-21days.html" title="Tours in Vietnam 21 days">» Tours in Vietnam 21 days</a></li>
				        <li><a href="./tours-in-vietnam-18days.html" title="Tours in Vietnam 18 days">» Tours in Vietnam 18 days</a></li>
				    </ul>
				</section>
			</div>

			<div class="col-md-12">
				<p class="ms"><b>Tours in {{ $destination }} (Include {{ $destination }} attractions):</b> Total <u>{{ !empty($tours) ? sizeof($tours) : 0 }}</u> TOUR(s) found.</p>
			</div>			

			<div class="clearfix"></div>

			<div class="tour-list">
			@foreach($tours as $tour) 
				<div class="col-sm-4">
					<div class="list-item">
						<a href="{{ url('vietnam/detail/'.$tour->alias) }}" title="{{ str_format( $tour->name, $tour->duration ) }}">
							<img src="{{ $tour->thumbnail }}" alt="{{ $tour->name }}" class="img-responsive">
						</a>
						<div class="item-detail">
							<h3><a href="{{ url('vietnam/detail/'.$tour->alias) }}" title="{{ str_format( $tour->name, $tour->duration ) }}">{{ $tour->name }}</a></h3>
							<p class="item-content">{{ $tour->description }}</p>
							<div class="item-duration">
								<p><span class="duration"><strong>Duration:</strong> {{ str_format('', $tour->duration) }}</span></p>
								<p><span class="price">From: ${{ $tour->price }}</span></p>
							</div>
							<div class="item-buttons">
								<a href="{{ url('vietnam/detail/'.$tour->alias) }}" title="{{ str_format( $tour->name, $tour->duration ) }}" class="btn btn-main btn-yellow">Details</a>
								<a href="{{ url('vietnam/booking/'.$tour->id) }}" title="Booking tour: {{ str_format( $tour->name, $tour->duration ) }}" class="btn btn-main btn-green">Book now</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div><!-- .tour-list -->
		</div>
	</div>

{!! HTML::script('jquery.validate.min.js') !!}
<script>
	$(document).ready(function() {
		$(function() {
	        $(".getlist ul:not(:first)").hide(), $(".getlist h3:first").css("border-top", "0").addClass("h5active"), $(".getlist h3").click(function() {
	            var i = !$(this).next().is(":visible");
	            $(this).siblings(".getlist h3.h5active").removeClass("h5active"), $(this).toggleClass("h5active", i), $(".getlist ul").slideUp(100), $(this).siblings(".getlist h3.h5active").toggleClass("h5active"), i && $(this).next().slideDown(100)
	        }), $(".open").trigger("click")
	    });
	});
</script>
@stop

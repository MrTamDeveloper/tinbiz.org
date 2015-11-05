@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/1413603891-booking.jpg', 'BOOKING TOUR', ['class' => 'img-responsive']) !!}
		@include('module.findyourstrip')
	</div>
	<div class="container" id="reviews">
		<h1 class="page-title">SPECIALS TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ url() }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Specials tours" href="{{ url('popular-tours') }}" class="active">
				<span itemprop="title">Specials tours</span>
				</a>
			</div>
		</div>
		<div class="row">
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

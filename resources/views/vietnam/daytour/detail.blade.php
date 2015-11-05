@extends('layout.main')

{{-- Start head --}}
@section('title')
    {{ $title }}
@stop
@section('description')
    {{ $description }}
@stop
@section('keywords')
    {{ $keywords }}
@stop
{{-- End head --}}

@section('page-content')
{!! HTML::style('magnific-popup.css') !!}
<div id="vietnam-tour-detail">
	<div class="slidehome">
		@include('module.findyourstrip')
	</div>
	<div class="container">
		<h1 class="page-title">DAY TOUR IN VIETNAM</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="#" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="#" class="active">
				<span itemprop="title">Vietnam Day Tours</span>
				</a>
				<span>› </span>
				<a title="Visa Fees" href="#" class="active">
				<span itemprop="title">{{ $tour->name }}</span>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div class="tour-thumbnail">
					<div class="row">
						<div class="col-sm-5">
							<img src="http://www.palmvietnamtravel.com/data/upload/1427341738-sapa-vietnam.jpg" alt="Explore the Wonders of Sapa" class="img-responsive">
						</div>
						<div class="col-sm-7 getdesc-day">
							<h2>{{ $tour->name }}</h2>
							<div class="row">
								<div class="col-sm-3">
									<strong>Start</strong>
								</div>
								<div class="col-sm-5">
									: {{ $tour->day_tour_start_time }}
								</div>
								<div class="clearfix set-mg-bottom"></div>
								<div class="col-sm-3">
									<strong>Destination</strong>
								</div>
								<div class="col-sm-5">
									: {{ ex_destination($tour->destinations) }}
								</div>
								<div class="clearfix set-mg-bottom"></div>
								<div class="col-sm-3">
									<strong>Duration</strong>
								</div>
								<div class="col-sm-5">
									: Full day
								</div> 	
								<div class="clearfix"></div>
							</div>
							{{-- <p><strong>Start</strong>: {{ $tour->day_tour_start_time }}</p>
							<p><strong>Destination</strong>: {{ ex_list_destination($tour->destinations, 'name') }}</p>
							<p><strong>Duration</strong>: {{ str_format( '', $tour->duration ) }}</p> --}}
							<span class="price">From: ${{ $tour->price }}</span>
							<div style="margin-top: 40px">
								<a href="{{ URL::to('booking/step2/'.$tour->id) }}" class="btn btn-summary">ONLINE BOOKING</a>
								<a href="#" class="btn btn-summary">DESIGN YOUR OWN TOUR</a>
							</div>
						</div>
					</div>
				</div><!-- tour-thumbnail -->
				@include('module.contact')
				<!-- .notice -->

				<div class="tour-detail day-tour-detail">
					<div class="itinerary">
						{!! $tour->content !!}
					</div>
				</div><!-- .tour-detail -->

				<div class="social">
					@include('module.social')
				</div><!-- .social -->

				<div class="related-tours">
					<h2 class="page-title">RELATED TOURS</h2>
					<div class="row">
						@foreach($related_tours as $related_tour)
							<div class="col-sm-4">
								<div class="list-item">
									<a href="{{ url('vietnam/detail/'.$related_tour->alias) }}" title="{{ $related_tour->name }}">
										<img src="{{ $related_tour->thumbnail }}" alt="{{ $related_tour->name }}" class="img-responsive">
									</a>
									<h3>
										<a href="{{ url('vietnam/detail/'.$related_tour->alias) }}" title="{{ $related_tour->name }}">{{ $related_tour->name }}</a>
									</h3>
									<p><strong>Duration:</strong> Full Day</p>
									<span class="price">From: ${{ $related_tour->price }}</span>
								</div><!-- .related-tour-item -->
							</div>
						@endforeach
					</div>
				</div><!-- related-tours -->
			</div>

			<div class="col-md-3 col-sm-4 hidden-xs">
				@include('module.widget.support')

				@include('module.widget.tour_booking_guide')

				@include('module.widget.why_us')
			</div>
		</div>
	</div>
</div><!-- #vietnam-tour-detail -->
{!! HTML::script('jquery.magnific-popup.js') !!}
<script>
	$('.photos').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
	enabled: true
		},
	});
</script>
@stop
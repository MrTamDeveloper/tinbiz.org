@extends('layout.main')

@section('page-content')
<div class="imgsub">
	{!! HTML::image('slideshow/sub_img.jpg', 'Vietnam tours') !!}
	@include('module.findyourstrip')
</div>
<div id="vietnam-tours">
	<div class="container">
		<h1 class="page-title">DAY TOURS IN VIETNAM</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ asset('') }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				 <span>» </span> <a title="Visa Fees" href="{{ asset('day-tours') }}" class="active"><span itemprop="title">Vietnam Day Tours</span></a>
			</div>
		</div>
		<div class="row inner-tour">
			<div class="col-md-9 col-sm-8">
				<div class="intro-day">
					{!! HTML::image('daytours.jpg', 'Vietnam Day Tours', ['class' => 'img-responsive']) !!}
					<h2>Vietnam Day Tours</h2>
					<p>We have featured the most comprehensive optional day trips in Vietnam. For your convenience, our scheduled and customized tours depart from Ho Chi Minh City (Former Saigon), Hanoi, Halong Bay.</p>
					<p>These trips are your best introductions to the key cities, best golf courses, beaches, cookings classes, cruises and attractions. You can easily combine an extension to other nearby destinations at any point during your stay in Vietnam. It's easy and reliable when you make the arrangements with Palm Vietnam Travel. It is our pleasure to make your visit enriching, comfortable and fun.</p>
					<p>All tours are private, depart daily, and can be customized to suit individual interests and schedules.<br />
					Call us any time at <strong>{{ Config::get('myconfig.HOTLINE') }}</strong> for planing whaterever day trip you want in our country Vietnam.<br />
					<strong>Come with us, you not only go sightseeing!</strong>
					</p>
				</div>
				<div class="tour-list row day-tour">
					@foreach($tours as $tour) 
						<div class="col-sm-4">
							<div class="list-item">
								<a href="{{ url('day-tour/detail/'.$tour->alias) }}" title="{{ str_format( $tour->name, $tour->duration ) }}">
									<img src="{{ $tour->thumbnail }}" alt="{{ $tour->name }}" class="img-responsive">
								</a>
								<div class="item-detail">
									<h3><a href="{{ url('day-tour/detail/'.$tour->alias) }}" title="{{ str_format( $tour->name, $tour->duration ) }}">{{ $tour->name }}</a></h3>
									<div class="item-duration">
										<p>Start: {{ $tour->day_tour_start_time }}</p>
										<p><span class="price">From: ${{ $tour->price }}</span></p>
									</div>
									<div class="item-buttons">
										<a href="{{ url('day-tour/detail/'.$tour->alias) }}" title="{{ str_format( $tour->name, $tour->duration ) }}" class="btn btn-main btn-yellow">Details</a>
										<a href="{{ url('vietnam/booking/'.$tour->id) }}" title="Booking tour: {{ str_format( $tour->name, $tour->duration ) }}" class="btn btn-main btn-green">Book now</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					@include('module.social')
				</div><!-- .tour-list -->
			</div>
			<div class="col-md-3 col-sm-4 hidden-xs">
				@include('module.widget.support')

				@include('module.widget.tour_booking_guide')

				@include('module.widget.why_us')
			</div>
		</div>
	</div>

</div><!-- #vietnam-tours -->

@stop
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
		<h1 class="page-title">NORTH VIETNAM TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="#" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="#" class="active">
				<span itemprop="title">Vietnam tours</span>
				</a>
				<span>› </span>
				<a title="Visa Fees" href="#" class="active">
				<span itemprop="title">Northern</span>
				</a>
				<span>› </span>
				<a title="Visa Fees" href="#" class="active">
				<span itemprop="title">{{ str_replace( '-','', str_format( $tour->name, $tour->duration ) ) }}</span>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div class="tour-thumbnail">
					<div class="row">
						<div class="col-sm-5">
							<img src="{{ $tour->thumbnail }}" alt="Explore the Wonders of Sapa" class="img-responsive">
						</div>
						<div class="col-sm-7">
							<h2>{{ $tour->name }}</h2>
							<p>{{ $tour->description }}</p>
							<p class="duration"><strong>Duration:</strong> {{ str_format( '', $tour->duration ) }}</p>
							<span class="price">From: ${{ $tour->price }}</span>
							<div style="margin-top: 40px">
								<a href="{{ URL::to('booking/step2/'.$tour->alias) }}" class="btn btn-summary">ONLINE BOOKING</a>
								<a href="#" class="btn btn-summary">DESIGN YOUR OWN TOUR</a>
							</div>
						</div>
					</div>
				</div><!-- tour-thumbnail -->
				@include('module.contact')
				<!-- .notice -->

				<div class="tour-detail">
					<div class="tour-tabs">
					    <!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab">ITINERARY & PRICE</a></li>
							<li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab">TOUR MAP</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">

							<div role="tabpanel" class="tab-pane active tour-content" id="intro">
								<h3>SUMMARY:</h3>
								{!! $tour->summary !!}
								<div class="tovisit">
									<strong>Destinations to visit:</strong>
									<p>{{ ex_destination($tour->destinations) }}</p>
								</div>

								<h3>PHOTOS:</h3>
								<div class="row photos">


									@foreach(json_decode($tour->photos) as $photo)
										<div class="col-sm-4">
											<a href="{{ $photo->src }}" title="{{ $photo->title }}" class="group1 cboxElement">
												<img src="{{ $photo->src }}" alt="{{ $photo->title }}" class="img-responsive">
											</a>
											<h4>{{ $photo->title }}</h4>
										</div>
									@endforeach
								</div>

								<h3>FULL ITINERARY:</h3>
								<div class="itinerary">
									{!! $tour->content !!}
								</div>

							</div>

							<div role="tabpanel" class="tab-pane tour-content" id="map">
								<img src="{{ $tour->map }}" alt="Vietnam tours" title="Vietnam tours" class="vietnam-map img-responsive"style="width: 100%">
							</div>
						</div>

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
									<a href="{{ url('vietnam/detail/'.$related_tour->alias) }}" title="{{ str_format( $related_tour->name, $related_tour->duration ) }}">
										<img src="{{ $related_tour->thumbnail }}" alt="{{ $related_tour->name }}" class="img-responsive">
									</a>
									<h3>
										<a href="{{ url('vietnam/detail/'.$related_tour->alias) }}" title="{{ str_format( $related_tour->name, $related_tour->duration ) }}">{{ $related_tour->name }}</a>
									</h3>
									<p><strong>Duration:</strong> {{ str_format('', $related_tour->duration) }}</p>
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
@extends('layout.main')

@section('page-content')
	<div class="container findyourstrip">
		<h1 class="page-title">SEARCH TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="#" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="#" class="active">
				<span itemprop="title">Vietnam</span>
				</a>
			</div>
		</div>
		<p class="ms">{!! count($data) > 0?'<u><b>'.count($data).'</b></u> results found.':"Haven't found what you are looking for!" !!}</p>
		<div class="tour-list row">
			@foreach($data as $tour) 
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
@stop
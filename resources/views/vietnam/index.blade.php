@extends('layout.main')

@section('page-content')
<div class="imgsub">
	{!! HTML::image('slideshow/1439019166-vietnam-tours.jpg', 'Vietnam tours') !!}
	@include('module.findyourstrip')
</div>
<div id="vietnam-tours">
	<div class="container">
		<h1 class="page-title">VIETNAM TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="https://www.vietnam-evisa.org" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				 <span>» </span> <a title="Visa Fees" href="https://www.vietnam-evisa.org/visa-fee.html" class="active"><span itemprop="title">Vietnam</span></a>
			</div>
		</div>
		<div class="tour-inner">
			<div class="tour-tabs">
			    <!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation"><a href="#intro" role="tab" data-toggle="tab">Tours in Vietnam</a></li>
					<li role="presentation" class="active"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab">INTRO</a></li>
					<li role="presentation"><a href="#when-to-go" aria-controls="when-to-go" role="tab" data-toggle="tab">WHEN TO GO</a></li>
					<li role="presentation"><a href="#sights" aria-controls="sights" role="tab" data-toggle="tab">SIGHTS & PLACES</a></li>
					<li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab">VIETNAM MAP</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active tour-intro" id="intro">
						<h2>Discover the charm of Vietnam</h2>
						<p><img src="http://www.palmvietnamtravel.com/data/upload/intro_vn.jpg" alt="Travel in Vietnam" class="img-responsive"></p>
						<p>Vietnam recently is emerging to be the most attractive destination in Asia. Travel to Vietnam is now the aspiration of many tourists all over the world. Travelers eagerly come to enjoy tour in Vietnam to visit its thousand year’s culture, beautiful beaches and extraordinary landscape throughout this country. Popular tourist destinations include the former imperial capital of Hué, the World Heritage Sites of Phong Nha-Ke Bang National Park, Hoi An and My Son, coastal regions such as Nha Trang or the caves of Ha Long Bay. And Palm Vietnam Travel is the best choice for tourists who is preparing for Vietnam Tour.</p>
						<p>&nbsp;</p>
						<p>We offers travelers with a real exotic tour with various options to meet every common demand of Vietnam holiday packages as we as designs flexible tour for any special requests. We are always side-by-side and experience with you from the busy Hanoi Capital and the bustle of Ho Chi Minh City, from amazing paddy fields when travel to Sapa and enjoy peaceful life in Mekong Delta. Everywhere in this country, the aboriginal’s friendliness and their warm welcome will bring you the homely feeling as if you are visit your own hometown after years.</p>
					</div>
					<div role="tabpanel" class="tab-pane tour-intro" id="when-to-go">
						<h2>Times To Visit Vietnam</h2>
						<p>You can travel to Vietnam any time of year and each season has its own special appeal. The most popular time for travel is between November to April. You should book well in advance if you wish to travel to Vietnam at this time. Temperatures are generally lower, especially in the north, where it can be quite cool in the winter months (December to February). Halong Bay is often covered in mist, which reduces visibility but adds to the atmosphere. In the south of the country, days are usually warm and clear, but be prepared for some instability and possible flooding in Central Vietnam during the months of October and November.<br> <br> During summer, which is also the monsoon season (May to November) you can expect days to be warm and humid with refreshing afternoon showers. Travel is rarely affected by the rain and everything is lush and green at this time. Skies over Halong Bay are usually clear and blue.</p>
					</div>
					<div role="tabpanel" class="tab-pane tour-intro" id="sights">
						<h2>Sights and Places in Vietnam</h2>
						<p>Vietnam's well preserved and vibrant cultural heritage is no more prevalent than in the northern capital city of Hanoi. Harmoniously blending old world charm with the contemporary, Hanoi is a city with a captivating mix of architectural heritage and European influences, making it one of Asia's most striking cities. A short journey southeast of Hanoi and you will discover the UNESCO World Heritage site of Halong Bay, featuring more than 2000 stunning islands and islets rising from the azure waters of the Gulf of Tonkin to create a dramatic and awe-inspiring setting.<br> <br> Along Vietnam's curvaceous coastline is Hue and Hoi An. The towns are short transfers from each other and straddle the banks of the Song Huong River.<br> <br> In the south is the extensive Mekong Delta and Ho Chi Minh City, the country's greatest metropolitan area consisting of a vibrant and high energy mixture of culture, commerce, tradition and modernity. Here designer hotels, boutique properties, markets, street stalls and high-end restaurants meet every desire.</p>

						<div class="places-list col-sm-12">
							<div class="col-sm-4 place-item">
								<a title="Northern Vietnam" href=""><img src="http://www.palmvietnamtravel.com/data/upload/1411634318-Halong-Bay-1.jpg" alt="Northern Vietnam"></a>
								<h3><a title="Northern Vietnam" href="">Northern Vietnam</a></h3>
								<p><a title="Hanoi" href="../travel-to-hanoi/">Hanoi</a><br> <a title="Halong Bay" href="">Halong Bay</a><br> <a title="Sapa" href="">Sapa</a></p>
							</div>
							<div class="col-sm-4 place-item">
								<a title="Central Vietnam" href="../central-vietnam-tours/"><img src="http://www.palmvietnamtravel.com/data/upload/1428988622-hoian-attractions.jpg" alt="Central Vietnam" width="400" height="377"></a>
								<h3><a title="Central Vietnam" href="">Central Vietnam</a></h3>
								<p><a title="Hoi An" href="">Hoi An</a><br> <a title="Hue" href="">Hue</a><br> <a title="Da Nang" href="">Da Nang</a></p>
							</div>
							<div class="col-sm-4 place-item">
								<a title="Southern Vietnam" href="#"><img src="http://www.palmvietnamtravel.com/data/upload/1417760831-saigon.jpg" alt="Southern Vietnam" width="400" height="300"></a>
								<h3><a title="Southern Vietnam" href="#">Southern Vietnam</a></h3>
								<p><a title="Nha Trang" href="#">Nha Trang</a><br> <a title="Ho Chi Minh City" href="#">Ho Chi Minh City</a><br> <a title="Mekong Delta" href="#">Mekong Delta</a></p>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane tour-intro" id="map">
						<img src="http://www.palmvietnamtravel.com/data/upload/1439014372-Vietnam_map.jpg" alt="Vietnam tours" title="Vietnam tours" class="vietnam-map img-responsive"style="width: 100%">
					</div>
				</div>

			</div>
		</div><!-- .tour-inner -->

		<div class="tour-list row">
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
		@include('module.social')
	</div>

</div><!-- #vietnam-tours -->


<script>
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
  var element = $(e.target).attr('aria-controls'); // newly activated tab
  $('.tab-content>.tab-pane').hide();
  $('#'+element).slideDown("slow");
  console.log(e.relatedTarget); // previous active tab
})
</script>

@stop
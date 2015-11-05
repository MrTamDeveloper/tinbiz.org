@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/1413603891-booking.jpg', 'BOOKING TOUR', ['class' => 'img-responsive']) !!}
		<!-- <img alt="BOOKING TOUR" src="data/upload/1413603891-booking.jpg"> -->
		@include('module.findyourstrip')
	</div>
	<div class="container">
		<h1 class="page-title">NORTH VIETNAM TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="#" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="https://www.vietnam-evisa.org/visa-fee.html" class="active">
				<span itemprop="title">Vietnam tours</span>
				</a>
				<span>› </span>
				<a title="Visa Fees" href="https://www.vietnam-evisa.org/visa-fee.html" class="active">
				<span itemprop="title">Northern</span>
				</a>
				<span>› </span>
				<a title="Visa Fees" href="https://www.vietnam-evisa.org/visa-fee.html" class="active">
				<span itemprop="title">{{ $tour->name }} {{ $tour->duration }} Days/ {{ $tour->duration - 1 }} Nights</span>
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
						<div class="col-sm-7">
							<h2>{{ $tour->name }}</h2>
							@if($tour->day_tour)
								<p class="duration"><strong>Start:</strong> {{ $tour->day_tour_start_time }}</p>
							@else
								<p class="duration"><strong>Duration:</strong> {{ $tour->duration }} Days/ {{ $tour->duration - 1 }} Nights</p>
							@endif
							<span class="price">From: ${{ $tour->price }}</span>
							<span>(Per person)</span>
							<p  class="introdesc">Let us know your travel plan by simply filling in the form below. We will contact you within 8 - 24 hours with a suggested itinerary and price.</p>
							<div style="margin-top: 40px">
								<a href="#" class="btn btn-summary">BACK TO DETAILS</a>
								<a href="#" class="btn btn-summary">DESIGN YOUR OWN TOUR</a>
							</div>
						</div>
					</div>
				</div><!-- tour-thumbnail -->
				@include('module.contact')
				<!-- .notice -->
				<div class="payment-note">
					@if($tour->day_tour)
						<p>We make your online reservation extremely satisfying, comfortable and without apprehension over your security, privacy and concern about online reservations. As soon as we receive your booking tour, we will contact you via e-mail by your travel consultant within 8 - 24 hours (A detail payment instruction will be sent to you via email).</p>
					@else
						<p>We make your online reservation extremely satisfying, comfortable and without apprehension over your security, privacy and concern about online reservations. All Tour Packages on this website operate on a Pre-Payment Basis.<br> We would require $ 100 USD per person upon confirmation and full payment must be made at least 15-30 days prior to your departure date.</p>
						<p>We accept your PayPal account, Credits Cards (Visa, Mastercard, American Express, Discover) or Debit Cards.</p>
					@endif
				</div>
				{{-- step --}}
				<div class="step col-sm-12">
					<div class="col-sm-4">
						<span class="list">01</span>Choose the packages
					</div>
					<div class="col-sm-4 active">
						<span class="list">02</span>Your booking
					</div>
					<div class="col-sm-4">
						<span class="list">03</span>Secure Checkout <span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="booking">
				   <!-- <form accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ URL::to('booking/store') }}" id="frmBooking" name="frmBooking"> -->
				   {!! Form::open(['route' => 'booking.store', 'role' => 'form', 'class' => 'validate form-horizontal', 'id' => 'frmBooking', 'name' => 'frmBooking', 'enctype' => 'multipart/form-data']) !!}
				      	<fieldset>
				         	<legend>Your Information</legend>
				         	<div class="form-group">
				         		<div class="col-md-2">
				         			<label for="txtCountry">Nationality <i>*</i></label>
				         		</div>
				         		<div class="col-md-5">
					               	{!! Form::select('nationality', array_combine(nation_array(),nation_array()) , '-- [Select] --', ['class' => 'form-control', 'id' => 'nationality']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtSex">Gender <i>*</i></label>
				         		</div>
				         		<div class="col-md-5">
				         			{!! Form::select('gender', [
										'Mr.'         => 'Mr',
										'Ms.'         => 'Mss',
										'Mrs.'        => 'Mrs',
										'Dr.'         => 'Dr.',
										'Prof.'       => 'Prof.',
										'Mstr.'       => 'Mstr.'
									], null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtFirstName">First name <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('first_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtLastName">Last name <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('last_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtEmail">Email Address <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required,email', 'id' => 'email']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtComfirmEmail">Confirm Email <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('email_confirm', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtPhone">Cell/ Mobile</label>
				         		</div>
				         		<div class="col-md-3 pd-rg">
				         			<?php $phoneCodes = array_combine(nation_phone_code_array(), nation_phone_array()) ?>
				         			{!! Form::select('phoneCode', $phoneCodes, '--- [Select] ---', ['class' => 'form-control']) !!}
				         		</div>
				         		<div class="col-sm-7 pd-lf">
				         			{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'E.g: +84988167702']) !!}
				         		</div>
				         	</div>
				      	</fieldset>
				      	<fieldset>
				         	<legend>Reservation Trip Details</legend>
				         	@if(!$tour->day_tour)
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label>Date of arrival <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('arrival_date', null, ['class' => 'form-control', 'readony' => 'readonly', 'id' => 'arrival_date']) !!}
				         		</div>
				         	</div>
				         	@endif
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label>Date of departure <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('departure_date', null, ['class' => 'form-control', 'readony' => 'readonly', 'id' => 'departure_date']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtAdults">Adults (&gt; 11 Age) <i>*</i></label>
				         		</div>
				         		<div class="col-md-3">
				         			{!! number_list('adults',['class' => 'form-control'], '--- [Select] ---', 20, true, null, null) !!}
				         		</div>
				         	</div>
				            <div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtChildren">Children (2-11 Age)</label>
				         		</div>
				         		<div class="col-md-3">
				         			{!! number_list('children',['class' => 'form-control'], '--- [Select] ---', 20, true, null, null) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtBabies">Babies &lt; 2 Age</label>
				         		</div>
				         		<div class="col-md-3">
				         			{!! number_list('babies',['class' => 'form-control'], '--- [Select] ---', 20, true, null, null) !!}
				         		</div>
				         	</div>

				         	@if(!$tour->day_tour)
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtHotel">Hotel Class <i>*</i></label>
				         		</div>
				         		<div class="col-md-3">
				         			{!! Form::select('hotel_class', [
										'3 Stars'   => '3 Stars',
										'4 Stars'   => '4 Stars',
										'5 Stars'   => '5 Stars',
										'Book By Myself' => 'Book By Myself'
									], '--- [Select] ---', ['class' => 'form-control', 'id' => 'hotel_class']) !!}
				         		</div>
				         	</div>
				           	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtHotelName">Hotel name</label>
				         		</div>
				         		<div class="col-md-3">
				         			{!! Form::text('hotel_name', null, ['class' => 'form-control', 'id' => 'hotel_name']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			 <label for="txtRoom1">Room preference:</label>
				         		</div>
				         		<div class="col-md-10">
				         			<div class="row">
				         				<div class="col-md-2 pd-rg">
					         				{!! number_list('single',['class' => 'form-control'], '----', 20, false, null, null) !!}
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Single</label>
						         		</div>
						         		<div class="col-md-2 pd-rg">
						         			{!! number_list('double',['class' => 'form-control'], '----', 20, false, null, null) !!}
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Double</label>
						         		</div>
						         		<div class="col-md-2 pd-rg">
						         			{!! number_list('twin',['class' => 'form-control'], '----', 20, false, null, null) !!}
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Twin</label>
						         		</div>
						         		<div class="col-md-2 pd-rg">
						         			{!! number_list('triple',['class' => 'form-control'], '----', 20, false, null, null) !!}
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Triple</label>
						         		</div>
				         			</div>
				         		</div>

				         	</div>
				         	@endif

				            <div class="form-group">
				            	<div class="col-md-12">
					            	<label class="labelcmt" for="txtMassage">Any additional requests or comments</label>
				            	</div>
				            	<div class="col-md-12">
				            		{!! Form::textarea('comment', null, ['class' => 'form-control', 'rows'=>'5']) !!}
				            	</div>
				            </div>
				            <div class="form-group">
				            	<div class="col-md-12">
				            		<input type="checkbox" checked="checked" id="copyemail" name="copyemail">
				            		<label class="copy-email" for="copyemail"> Send copy to yourself</label>
				            	</div>
				            </div>
				      </fieldset>
				      <input type="hidden" name="tour_id" value="{{ $tour->id }}">
				      <input type="hidden" name="tour_name" value="{{ $tour->name }}">
				      <input type="hidden" name="tour_alias" value="{{ $tour->alias }}">
				      <input type="submit" value="BOOK NOW" id="btnBooking" name="btnBooking">
				   {!! Form::close() !!}
				</div>
				<div class="social">
					@include('module.social')
				</div><!-- .social -->
			</div>

			<div class="col-md-3 col-sm-4 hidden-xs">
				@include('module.widget.support')

				@include('module.widget.tour_booking_guide')

				@include('module.widget.why_us')
			</div>
		</div>
	</div>


{!! HTML::script('jquery.validate.min.js') !!}
<script>
	$( "#frmBooking" ).validate({
	  rules: {
	  	nationality : "required",
	  	first_name : "required",
	  	last_name : "required",
	    email: {
	    	required: true,
		    email: true
	    },
	    email_confirm: {
	    	required: true,
		    email: true,
	    	equalTo: "#email"
	    },
	    phone : {
	    	required: true,
	    	digits: true
	    },

	    arrival_port : "required",
	    arrival_date : "required",
	    departure_date : "required",
	    duration : "required",
	    adults : "required"
	  }
	});
</script>
@stop

@section('footer-script')
	@include('module.datepicker.date')
	<script>
	    var nowTemp = new Date();
    	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    	var checkin = $('#arrival_date').datepicker({
    		format: 'mm/dd/yyyy',
      		onRender: function(date) {
        		return date.valueOf() < now.valueOf() ? 'disabled' : '';
      		}
    	}).on('changeDate', function(ev) {
    		console.log(ev.date);
			checkin.hide();
      		$('#departure_date')[0].focus();
    	}).data('datepicker');

		var checkout = $('#departure_date').datepicker({
			format: 'mm/dd/yyyy',
  			onRender: function(date) {
    		return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  		}
    	}).on('changeDate', function(ev) {
     		checkout.hide();
    	}).data('datepicker');
	</script>
@stop
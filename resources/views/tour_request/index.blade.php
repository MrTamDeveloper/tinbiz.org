@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/1413603891-booking.jpg', 'BOOKING TOUR', ['class' => 'img-responsive']) !!}
		@include('module.findyourstrip')
	</div>
	<div class="container">
		<h1 class="page-title">CUSTOMIZED TOUR</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ url() }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="{{ url('customized-tours') }}" class="active">
				<span itemprop="title">Customized tour</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-sm-8">
				@if(session('request_message'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>

					<strong>Well done!</strong> {{ session('request_message') }}
				</div>
				@endif
				<section class="guide cush2">
				<h2>Create your own trip</h2>
					<p>Spend few minutes to customize your tours to Vietnam, Cambodia, Laos and Myanmar. If you encounter any difficulties, please send your custom request through this form or to our Sales Department at:&nbsp;<a title="Email" href="mailto:info@palmvietnamtravel.com">info@palmvietnamtravel.com</a>. We shall review and reply your inquiry no later than <strong>24 working hours</strong>.</p>
					<p>Let us know your travel plan by simply filling in the form below. We will contact you within <strong>8 - 24 hours</strong> with a suggested itinerary and price. Or speak to our Experts:&nbsp;<strong>+84 902 626 729</strong></p>
				</section>

				<div class="clearfix"></div>
				<div class="booking">
				{!! Form::open(['url' => 'customized-tours', 'role' => 'form', 'class' => 'validate form-horizontal', 'name' => 'frmTourRequest', 'id' => 'frmTourRequest', 'enctype' => 'multipart/form-data']) !!}
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
				         			<label for="first_name">First name <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('first_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="last_name">Last name <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('last_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="email">Email Address <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required,email', 'id' => 'email']) !!}
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="email_confirm">Confirm Email <i>*</i></label>
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

				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtPhone">Payment Method</label>
				         		</div>
				         		<div class="col-md-4 pd-rg">
									{!! Form::select('payment_method', [
										'Wire Transfer/Bank Transfer'         => 'Wire Transfer/Bank Transfer',
										'Credit Card'                         => 'Credit Card',
										'Credit Card Form'                    => 'Credit Card Form',
										'Transfer Money Online'               => 'Transfer Money Online.',
										'Deposit'                             => 'Deposit.',
										'Other'                               => 'Other.'
									], '--- [Select] ---', ['class' => 'form-control', 'data-validate' => 'required']) !!}
				         		</div>
				         		<div class="col-sm-6 pd-lf">
				         			{!! HTML::image('ico-pay.png') !!}
				         		</div>
				         	</div>
				      	</fieldset>

				      	<fieldset>
				         	<legend>Destination(s) to visit</legend>
				         	<!-- List of destinations -->
							<div class="form-group">
								@for($i=0; $i < sizeof($destinations); $i++)
									@if($i % 7 == 0)
										@if($i!=0)
										</div></div>
										@endif
										<div class="col-sm-3">
											<div class="form-block">
									@endif
									<label>
										<input type="checkbox" name="destinations[]" value="{{ $destinations[$i]->name }}" class="cbr cbr-done">
										{{ $destinations[$i]->name }}
									</label>
									<br>

									@if($i == sizeof($destinations))
										</div></div>
									@endif
								@endfor
							</div>
				         </fieldset>

				      	<fieldset>
				         	<legend>Reservation Trip Details</legend>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label>Date of arrival <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			{!! Form::text('arrival_date', null, ['class' => 'form-control', 'readony' => 'readonly', 'id' => 'arrival_date']) !!}
				         		</div>
				         	</div>
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
				         			<label for="txtHotel">Duration <i>*</i></label>
				         		</div>
				         		<div class="col-md-3">
				         			{!! number_list('duration',['class' => 'form-control', 'id' => 'duration'], '--- [Select] ---', 21, true, 'Days', null) !!}
				         		</div>
				         	</div>

				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtHotel">Arrival port <i>*</i></label>
				         		</div>
				         		<div class="col-md-3">
				         			{!! Form::select('arrival_port', [
										'Hanoi Capital - Vietnam'    => 'Hanoi Capital - Vietnam',
										'Danang City - Vietnam'      => 'Danang City - Vietnam',
										'Ho Chi Minh City - Vietnam' => 'Ho Chi Minh City - Vietnam',
									], '--- [Select] ---', ['class' => 'form-control', 'data-validate' => 'required', 'id' => 'arrival_port']) !!}
				         		</div>
				         	</div>

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

				            <div class="form-group">
				            	<div class="col-md-12">
					            	<label class="labelcmt" for="txtMassage">Other Information</label>
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
				      <button type="submit" class="btn btn-main btn-orange btn-lg btnTourRequest" name="btnTourRequest">SEND REQUEST</button>
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
	$( "#frmTourRequest" ).validate({
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
    		format: 'dd/mm/yyyy',
      		onRender: function(date) {
        		return date.valueOf() < now.valueOf() ? 'disabled' : '';
      		}
    	}).on('changeDate', function(ev) {
			checkin.hide();
      		$('#departure_date')[0].focus();
    	}).data('datepicker');

		var checkout = $('#departure_date').datepicker({
			format: 'dd/mm/yyyy',
  			onRender: function(date) {
    		return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  		}
    	}).on('changeDate', function(ev) {
     		checkout.hide();
    	}).data('datepicker');
	</script>
@stop
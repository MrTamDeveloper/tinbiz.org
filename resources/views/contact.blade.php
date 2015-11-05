@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/sub_img.jpg', 'Vietnam tours') !!}
		@include('module.findyourstrip')
	</div>
	<div class="container contact">
		<h1 class="page-title">Contact</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ URL::to('') }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				 <span>» </span> <a title="Visa Fees" href="{{ URL::to('contact') }}" class="active"><span itemprop="title">Contact us</span></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<section>
					<h2 class="margin-top">Vietnam Travel</h2>
					<address class="ct">
						<p><strong>Head Office:</strong></p>
						<p>{{ Config::get('myconfig.ADDRESS') }}.</p>
						<p>Tel: {{ Config::get('myconfig.TELL') }} - Fax: {{ Config::get('myconfig.FAX') }}</p><br />
						<p><strong>HOTLINE 24/7: {{ Config::get('myconfig.HOTLINE') }}</strong></p>
						<p><a title="Email" href="mailto:info@palmvietnam.com">Email: {{ Config::get('myconfig.MAIL_INFO') }}</a></p>
					</address>
					@if(session('request_message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">
								<span aria-hidden="true">×</span>
								<span class="sr-only">Close</span>
							</button>

							<strong>{{ session('request_message') }}</strong>
						</div>
					@endif
					{!! Form::open(['url' => 'contact', 'role' => 'form', 'class' => 'validate form-horizontal', 'name' => 'frmContact', 'id' => 'frmContact', 'enctype' => 'multipart/form-data']) !!}
						<p>Let us know your message by simply filling in the form below. We will contact you within 5 - 24 hours.</p>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<label for="txtContactName">Full name/Company <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			<input type="text" id="txtContactName" class="form-control" name="fullname">
					   		</div>
					   	</div>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<label for="txtContactEmail">Email <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			<input type="text" id="txtContactEmail" class="form-control" name="email">
					   		</div>
					   	</div>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<label for="txtContactNationality">Nationality <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			{!! Form::select('nationality', array_combine(nation_array(),nation_array()) , '-- [Nationality] --', ['class' => 'form-control', 'id' => 'nationality']) !!}
					   		</div>
					   	</div>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<label for="txtContactMessage">Message <i>*</i></label>
					   		</div>
					   		<div class="col-sm-12">
					   			<textarea id="txtContactMessage" name="content" class="form-control"></textarea>
					   		</div>
					   	</div>
					   	<div class="form-group">
					   		<div class="col-sm-12">
					   			<input type="submit" onclick="return checkBooking();" class="btn btn-main btn-orange" value="SEND" id="btnContact" name="btnContact">
					   		</div>
					   	</div>
					{!! Form::close() !!}
				</section>
				@include('module.social')
			</div>
		</div>
	</div>
@stop

@section('footer-script')
	{!! HTML::script('jquery.validate.min.js') !!}
	<script>
		$( "#frmContact" ).validate({
			rules: {
				txtContactName : "required",
				txtContactEmail: {
				required: true,
				email: true
				},
				txtContactMessage : "required",
			}
		});
	</script>
@stop
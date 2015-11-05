@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/1413603891-booking.jpg', 'BOOKING TOUR', ['class' => 'img-responsive']) !!}
		@include('module.findyourstrip')
	</div>
	<div class="container" id="reviews">
		<h1 class="page-title">TRAVELLER'S REVIEWS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ url() }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="{{ url('customized-tours') }}" class="active">
				<span itemprop="title">Travellers reviews</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<section class="about">
				    <div class="testimonial-script"><span id="toggle-review-form">Suggestions/Comments</span>
				        <p><strong>For any suggestions or comments, please email us at:&nbsp;<a title="Email contact" href="mailto:{{ Config::get('myconfig.MAIL_INFO') }}">{{ Config::get('myconfig.MAIL_INFO') }}</a></strong>
				        </p>
				        <div class="write-form">
				            {!! Form::open(['route' => 'tour-reviews.store', 'role' => 'form', 'class' => 'validate form-horizontal', 'id' => 'frmReview', 'name' => 'frmReview', 'enctype' => 'multipart/form-data']) !!}
		                    <div class="form-group">
		                    	<div class="col-sm-2">
			                        <label for="full_name">Full name (*)</label>
		                    	</div>
		                    	<div class="col-sm-6">
			                        {!! Form::text('full_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
		                    	</div>
		                    </div>
		                    <div class="form-group">
			                    <div class="col-sm-2">
			                        <label for="nationality">Country</label>
			                    </div>
			                    <div class="col-sm-6">
			                        {!! Form::select('nationality', array_combine(nation_array(),nation_array()) , '-- [Select] --', ['class' => 'form-control', 'id' => 'nationality']) !!}
			                    </div>
		                    </div>
		                    <div class="form-group">
			                    <div class="col-sm-2">
			                        <label for="email">Email (*)</label>
			                    </div>
			                    <div class="col-sm-6">
			                        {!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
			                    </div>
		                    </div>
		                    <div class="form-group">
				            	<div class="col-sm-2">
					            	<label for="content">Message (*)</label>
				            	</div>
				            	<div class="col-sm-6">
				            		{!! Form::textarea('content', null, ['class' => 'form-control', 'rows'=>'5']) !!}
				            	</div>
				            </div>
		                    <!--<p><label for="attachment">File Attach</label><input name="attachment" type="file"></p>-->
		                    <div class="form-group">
			                    <div class="col-sm-offset-2 col-sm-2">
			                        <input class="btn btn-main btn-orange btn-review" type="submit" name="SubmitTesti" id="SubmitTesti" value="Submit">
			                    </div>
		                    </div>
			                <div class="ajax-message">
			                	<span class="fa fa-spin fa-spinner"></span>
			                    <span class="waiting-text">Sending...</span>
			                </div>
				            {!! Form::close() !!}
				        </div>
				    </div>
				</section>
			</div>

			<div class="clearfix"></div>

			<div class="testimonial-list">
				@foreach($reviews as $review)
				<div class="col-sm-3">
					<div class="testimonial-item">
						<a href='{{ url("tour-reviews/$review->id")}}' title="View comments">
							<img src="{{ $review->avatar }}" alt="{{ $review->full_name }}" class="img-responsive">
						</a>
						<h3>
							<a href="{{ url('tour-reviews/$review->id' )}}" title="View comments">{{ $review->full_name }} - {{ $review->nationality }}</a>
						</h3>
						<p class="testmin">{{ str_limit($review->content, 150) }}</p>
					</div>
				</div>
				@endforeach
			</div><!-- .testimonial-list -->
		</div>
	</div>

{!! HTML::script('jquery.validate.min.js') !!}
<script>
	$("#toggle-review-form").click(function(event) {
		$('.write-form').toggle('fast');
	});

	$( "#frmReview" ).validate({
	  rules: {
	  	nationality : "required",
	  	full_name : "required",
	    email: {
	    	required: true,
		    email: true
	    },

	    content : "required"
	  },
	  submitHandler: function() {
	  	$.ajax({
	  		url: "{{ route('tour-reviews.store') }}",
	  		type: 'POST',
	  		data: $( "#frmReview" ).serialize(),
	  		beforeSend: function() {
				$('.ajax-message').show();
				$('.fa-spinner').show();
	  			$('.waiting-text').text('Sending ...');
			},
	        success : function(data){
	        	console.log('hello');
		        $('.waiting-text').text(data);
		  		$('.fa-spinner').hide();
		  		setTimeout(function(){
		  		   $('#frmReview').find("input[type=text], textarea").val("");
				   $('.ajax-message').hide();
				   $('.write-form').hide('slow');// or fade, css display however you'd like.
				}, 2000);
	        }
	  	}, "json");
	  }
	});
</script>
@stop

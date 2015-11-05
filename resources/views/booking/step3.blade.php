@extends('layout.main')

@section('page-content')
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
				<span itemprop="title">Explore the Wonders of Sapa 4 Days/ 3 Nights</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div class="tour-thumbnail">
					<div class="row">
						<div class="col-sm-5">
							<img src="{{ $tour->thumbnail }}" class="img-responsive">
						</div>
						<div class="col-sm-7">
							<h2>{{ $tour->name }}</h2>
							<p class="duration"><strong>Duration:</strong> {{ $tour->duration }} Days/ {{ $tour->duration - 1 }} Nights</p>
							<span class="price">From: ${{ $tour->price }}</span>
							<span>(Per person)</span>
							<p  class="introdesc">Let us know your travel plan by simply filling in the form below. We will contact you within 8 - 24 hours with a suggested itinerary and price.</p>
							<div style="margin-top: 40px">
								<a href="{{ url('vietnam/detail/'.$tour->alias) }}" class="btn btn-summary">BACK TO DETAILS</a>
								<a href="{{ url('customized-tours') }}" class="btn btn-summary">DESIGN YOUR OWN TOUR</a>
							</div>
						</div>
					</div>
				</div><!-- tour-thumbnail -->
				@include('module.contact')
				<!-- .notice -->
				<div class="payment-note">
					<p>We make your online reservation extremely satisfying, comfortable and without apprehension over your security, privacy and concern about online reservations. All Tour Packages on this website operate on a Pre-Payment Basis.<br> We would require $ 100 USD per person upon confirmation and full payment must be made at least 15-30 days prior to your departure date.</p>
					<p>We accept your PayPal account, Credits Cards (Visa, Mastercard, American Express, Discover) or Debit Cards.</p>
				</div>
				{{-- step --}}
				<div class="step col-sm-12">
					<div class="col-sm-4">
						<span class="list">01</span>Choose the packages
					</div>
					<div class="col-sm-4">
						<span class="list">02</span>Your booking
					</div>
					<div class="col-sm-4 active">
						<span class="list">03</span>Finish Booking <span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div role="alert" class="alert alert-success message">
			      	<span aria-hidden="true" class="glyphicon glyphicon-ok-sign"></span> <strong> Your enquiry submission is sucessful, thank you!</strong>
			    </div>
				<div class="message">
					<p class="before success"></p>
				</div>
				<div class="reviewstatus">
					<p><b><i>Dear Sir/Madam,</i></b></p>
					<p>Thank you for choosing Palm Vietnam Travel!</p><p>Below is the information for your booking:</p>
					<button title="Print Your Booking" class="print" onclick="printContent('print_info')">Print Your Booking</button>
				</div>
				<div id="print_info" class="view">
				   	<table class="table-view">
				      	<tbody>
				         	<tr class="tbhead">
				            	<td colspan="2">Your Information</td>
				         	</tr>
				         	<tr>
					            <td width="31%"><strong>Nationality:</strong></td>
					            <td width="69%">{{ $booking->nationality }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Gender:</strong></td>
					            <td>{{ $booking->gender }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>First name:</strong></td>
					            <td>{{ $booking->first_name }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Last name:</strong></td>
					            <td>{{ $booking->last_name }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Email:</strong></td>
					            <td>{{ $booking->email }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Phone:</strong></td>
					            <td>{{ $booking->phone }}</td>
				         	</tr>
					        <tr class="tbhead">
					            <td colspan="2">Reservation Trip Details</td>
					        </tr>
				         	<tr>
					            <td><strong>Tour name:</strong></td>
					            <td>{{ $tour->name }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Date of arrival:</strong></td>
					            <td>{{ date('F, d Y',strtotime($booking->arrival_date)) }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Date of departure:</strong></td>
					            <td>{{ date('F, d Y',strtotime($booking->departure_date)) }}</td>
				         	</tr>
					        <tr>
					            <td><strong>Adults:</strong></td>
					            <td>{{ $booking->adults }}</td>
					        </tr>
				         	<tr>
					            <td><strong>Children:</strong></td>
					            <td>{{ $booking->children }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Babies:</strong></td>
					            <td>{{ $booking->babies }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Hotel Class:</strong></td>
					            <td>{{ $booking->hotel_class }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Hotel name:</strong></td>
					            <td>{{ $booking->hotel_name }}</td>
				         	</tr>
				         	<tr>
					            <td><strong>Room preference:</strong></td>
					            <?php $room_references = json_decode($booking->hotel_room_reference, true) ?>
	                            <td>
	                            	Single:{!! !empty($room_references['single']) ? $room_references['single'] : 00 !!}  - Double:{!! !empty($room_references['double']) ? $room_references['double'] : 00 !!}  -
	                            	Twin:{!! !empty($room_references['twin']) ? $room_references['twin'] : 00 !!}  -
	                            	Triple:{!! !empty($room_references['triple']) ? $room_references['triple'] : 00 !!}
	                            </td>
				         	</tr>
				         	<tr>
					            <td><strong>Comments:</strong></td>
					            <td>{{ $booking->comment }}</td>
				         	</tr>
				         	<!-- <tr>
				         						            <td><strong>Online Transaction Fee (4.5%)</strong></td>
				         						            <td class="total">13.5 USD</td>
				         	</tr>
				         	<tr>
				         						            <td><strong>Total Deposit</strong></td>
				         						            <td class="total">313.5 USD</td>
				         	</tr> -->
				      	</tbody>
				   	</table>
				</div>

				<!-- <div class="payment" style="display: block;">
				   	<form action="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&amp;no_note=may&amp;no_shipping=1&amp;currency_code=USD&amp;notify_url=&amp;amount=104.5&amp;business=hongdiep@palmvietnam.com&amp;item_name=Payment booking tour&amp;vpc_orderid=116.106.68.104&amp;quantity=4&amp;rm=2&amp;return_url=www.palmvietnamtravel.com&amp;cancel_url=www.palmvietnamtravel.com&amp;BUTTONSOURCE=Peacesoft_Channel_EC_VN" onsubmit="return checkPaymentBtn(this);" id="formChk" name="formChk" method="post">
				      	<p>Your booking information has been sent to Palm Vietnam Travel and is pedding. To complete the booking you must pay a deposit of <b> 100 USD </b> by click the 'Check out with Paypal' button below to payment safely with Paypal.</p>
				      	<p>
				      		<input type="checkbox" id="ChkConfirm" name="ChkConfirm">
				      		I have read, understood, accept the <a target="_blank" title="Terms &amp; Conditions" href="{{ URL::to('terms-conditions') }}">Terms &amp; Conditions</a>, <a target="_blank" title="Booking Guide" href="{{ URL::to('payment-refund') }}">Booking Guide</a> and <a target="_blank" title="Privacy Policy" href="{{ URL::to('privacy-policy') }}">Privacy Policy</a> as stated in the agreement.

				      	</p>
				      	<input type="submit" value="">
				   </form>
				</div> -->


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
@stop
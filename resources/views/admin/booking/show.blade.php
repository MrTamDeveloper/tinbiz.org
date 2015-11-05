@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">Booking Detail</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tour Booking Information
			</div>
			<div class="panel-body">
				<table class="table table-condensed">
					<tbody>
						<tr>
							<td width="150"><strong>Tour name</strong></td>
							<td>:</td>
							<td>
								{{ $booking->tour_name }}
							</td>
						</tr>
						<tr>
							<td><strong>Arrival date</strong></td>
							<td>:</td>
							<td>
								{{ date('F, d Y', strtotime($booking->arrival_date)) }}
							</td>
						</tr>
						<tr>
							<td><strong>Departure date</strong></td>
							<td>:</td>
							<td>
								{{ date('F, d Y', strtotime($booking->departure_date)) }}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Hotel Booking Information
			</div>
			<div class="panel-body">
				<table class="table table-condensed">
					<tbody>
						<tr>
							<td width="150"><strong>Hotel class</strong></td>
							<td>:</td>
							<td>
								{{ $booking->hotel_class }}
							</td>
						</tr>
						@if(!empty($booking->hotel_name))
						<tr>
							<td><strong>Hotel name</strong></td>
							<td>:</td>
							<td>
								{{ date('F, d Y', strtotime($booking->hotel_name)) }}
							</td>
						</tr>
						@endif
						<tr>
							<td><strong>Travelers</strong></td>
							<td>:</td>
							<td>
								Adults: {{ $booking->adults }}
								- Children : {{ !empty($booking->children) ? $booking->children : '0' }}
								- Babies : {{ !empty($booking->babies) ? $booking->babies : '0' }}
							</td>
						</tr>

						<tr>
							<td><strong>Room references</strong></td>
							<td>:</td>
							<td>
								Single: {{ !empty($booking->single) ? $booking->single : '0' }}
								- Double : {{ !empty($booking->double) ? $booking->double : '0' }}
								- Twin : {{ !empty($booking->twin) ? $booking->twin : '0' }}
								- Triple : {{ !empty($booking->triple) ? $booking->triple : '0' }}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Contact Information
			</div>
			<div class="panel-body">
				<table class="table table-condensed">
					<tbody>
						<tr>
							<td width="150"><strong>Fullname</strong></td>
							<td>:</td>
							<td>
								{{ $booking->gender }}.{{ $booking->first_name }} {{ $booking->last_name }}
							</td>
						</tr>
						<tr>
							<td><strong>Nationality</strong></td>
							<td>:</td>
							<td>
								{{ $booking->nationality }}
							</td>
						</tr>
						<tr>
							<td><strong>Email</strong></td>
							<td>:</td>
							<td>
								{{ $booking->email }}
							</td>
						</tr>
						<tr>
							<td><strong>Phone number</strong></td>
							<td>:</td>
							<td>
								{{ $booking->phone }}
							</td>
						</tr>
						<!-- <tr>
							<td><strong>Payment method</strong></td>
							<td>:</td>
							<td>
								{{ $booking->payment_method }}
							</td>
						</tr> -->
						<tr>
							<td><strong>Message</strong></td>
							<td>:</td>
							<td>
								{{ $booking->comment }}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop
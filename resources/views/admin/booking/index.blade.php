@extends('layout.admin')

@section('page-content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<form action="{{ url('administrator/destination/update_destinations') }}" method="POST" name="frmDestinations">
				{!! csrf_field() !!}
				<div class="panel-heading">
					<h3 class="panel-title">Tour Bookings</h3>

					<div class="panel-options">
						<div class="vertical-top">
							<a href="#" onclick="frmDestinations.submit()" class="btn btn-red btn-icon btn-tool btn-sm">
								<i class="fa-trash"></i>
								<span>Delete</span>
							</a>

							{{-- <a href="{{ action('Admin\DestinationController@create') }}" class="btn btn-blue btn-icon btn-tool btn-sm">
								<i class="fa-plus"></i>
								<span>New</span>
							</a> --}}
						</div>
					</div>
				</div>
				<div class="panel-body">

						<script type="text/javascript">
						jQuery(document).ready(function($)
						{
							$("#tbl-destinations").dataTable({
								// dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",
								aLengthMenu: [
									[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
								],
								columnDefs: [ { orderable: false, targets: [0,6] }],
								pageLength : 20,
							});

							// Replace checkboxes when they appear
							var $state = $("#tbl-destinations thead input[type='checkbox']");

							$("#tbl-destinations").on('draw.dt', function()
							{
								cbr_replace();

								$state.trigger('change');
							});

							// Script to select all checkboxes
							$state.on('change', function(ev)
							{
								var $chcks = $("#tbl-destinations tbody .cb-select");

								if($state.is(':checked'))
								{
									$chcks.prop('checked', true).trigger('change');
								}
								else
								{
									$chcks.prop('checked', false).trigger('change');
								}
							});
						});
						</script>

						<table class="table table-striped" id="tbl-destinations">
							<thead>
								<tr>
									<th class="no-sorting">
										<input type="checkbox" class="cbr">
									</th>
									<th>ID</th>
									<th>Tour name</th>
									<th>Name</th>
									<th>Email</th>
									<th class="text-center">Nationality</th>
									<th>Created date</th>
									<th></th>
								</tr>
							</thead>

							<tbody class="middle-align">
								<?php $i = 1 ?>
								@foreach($bookings as $booking)
									<tr>
										<td>
											<input type="checkbox" class="cbr cb-select" name="cbid[]" value="{{ $booking->id }}">
										</td>
										<td><a href="{{ route('administrator.booking.show', $booking->id) }}">{{ $booking->id }}</td>
										<td><a href="{{ route('administrator.booking.show', $booking->id) }}">{{ $booking->tour_name }}</td>
										<td><a href="{{ route('administrator.booking.show', $booking->id) }}">{{ $booking->first_name }} {{ $booking->last_name }}</a></td>
										<td><a href="mailto:{{ $booking->email }}">{{ $booking->email }}</a></td>
										<td>{{ $booking->nationality }}</td>
										<td>{{ date('M/d/Y', strtotime($booking->created_at)) }}</td>
										<td>
											<a href="javascript:void(0);" onclick="deleteRow('booking', {{ $booking->id }}, this)" class="delete">
												<i class="linecons-trash"></i>
												Delete
											</a>
										</td>
									</tr>
								<?php $i++ ?>
								@endforeach
							</tbody>
						</table>
				</div>
			</form>
		</div>
	</div>
</div>
@stop

@section('script')

<link rel="stylesheet" href="{{ asset('public/template/js/datatables/dataTables.bootstrap.css') }}">
{!! HTML::script('datatables/js/jquery.dataTables.min.js') !!}
{!! HTML::script('datatables/dataTables.bootstrap.js') !!}
{!! HTML::script('datatables/yadcf/jquery.dataTables.yadcf.js') !!}
{!! HTML::script('datatables/tabletools/dataTables.tableTools.min.js') !!}
{!! HTML::script('admin.js') !!}

@stop
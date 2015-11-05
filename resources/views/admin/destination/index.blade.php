@extends('layout.admin')

@section('page-content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<form action="{{ url('administrator/destination/update_destinations') }}" method="POST" name="frmDestinations">
				{!! csrf_field() !!}
				<div class="panel-heading">
					<h3 class="panel-title">Vietnam Destinations</h3>

					<div class="panel-options">
						<div class="vertical-top">
							<a href="#" onclick="frmDestinations.submit()" class="btn btn-red btn-icon btn-tool btn-sm">
								<i class="fa-trash"></i>
								<span>Delete</span>
							</a>

							<a href="{{ action('Admin\DestinationController@create') }}" class="btn btn-blue btn-icon btn-tool btn-sm">
								<i class="fa-plus"></i>
								<span>New</span>
							</a>
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
									<th>#</th>
									<th>Name</th>
									<th>Region</th>
									<th class="text-center">Published</th>
									<th>Created date</th>
									<th></th>
								</tr>
							</thead>

							<tbody class="middle-align">
								<?php $i = 1 ?>
								@foreach($destinations as $destination)
									<tr>
										<td>
											<input type="checkbox" class="cbr cb-select" name="cbid[]" value="{{ $destination->id }}">
										</td>
										<td>{{ $i }}</td>
										<td><a href="{{ route('administrator.destination.edit', $destination->id) }}">{{ $destination->name }}</a></td>
										<td>{{ $destination->region }}</td>
										<td align="center">
											<label>
												@if($destination->active)
												<input type="checkbox" data-id="{{ $destination->id }}" class="cbr cbr-secondary cb-active" onclick="setActive('destination', {{ $destination->id }}, this)" checked>
												@else
												<input type="checkbox" data-id="{{ $destination->id }}" class="cbr cbr-secondary cb-active" onclick="setActive('destination', {{ $destination->id }}, this)">
												@endif
											</label>
										</td>
										<td>{{ date('M/d/Y', strtotime($destination->created_at)) }}</td>
										<td>
											<a href="javascript:void(0);" onclick="deleteRow('destination', {{ $destination->id }}, this)" class="delete">
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
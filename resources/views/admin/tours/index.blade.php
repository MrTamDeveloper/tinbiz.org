@extends('layout.admin')

@section('page-content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<form action="{{ url('administrator/tour/delete-tours') }}" method="POST" name="frmPosts">
				{!! csrf_field() !!}
				<div class="panel-heading">
					<h3 class="panel-title">Tours list</h3>

					<div class="panel-options">
						<div class="vertical-top">
							<a href="#" onclick="frmPosts.submit()" class="btn btn-red btn-icon btn-tool btn-sm">
								<i class="fa-trash"></i>
								<span>Delete</span>
							</a>

							<a href="{{ action('Admin\TourController@create') }}" class="btn btn-blue btn-icon btn-tool btn-sm">
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
							$("#tbl-post").dataTable({
								// dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",
								aLengthMenu: [
									[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
								],
								columnDefs: [ { orderable: false, targets: [0,2,7,9] }],
								pageLength : 20,
							});

							// Replace checkboxes when they appear
							var $state = $("#tbl-post thead input[type='checkbox']");

							$("#tbl-post").on('draw.dt', function()
							{
								cbr_replace();

								$state.trigger('change');
							});

							// Script to select all checkboxes
							$state.on('change', function(ev)
							{
								var $chcks = $("#tbl-post tbody .cb-select");

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

						<table class="table table-striped" id="tbl-post">
							<thead>
								<tr>
									<th class="no-sorting">
										<input type="checkbox" class="cbr">
									</th>
									<th>#</th>
									<th>Thumbnail</th>
									<th width="14%">Title</th>
									<th>From</th>
									<th>To</th>
									<th>Duration</th>
									<th width="14%">Destinations</th>
									<th>Price</th>
									<th class="text-center">Published</th>
								</tr>
							</thead>

							<tbody class="middle-align">
								<?php $i = 1 ?>
								@foreach($tours as $tour)
									<tr>
										<td>
											<input type="checkbox" class="cbr cb-select" name="cbid[]" value="{{ $tour->id }}">
										</td>
										<td>{{ $i }}</td>
										<td><a href="{{ route('administrator.tour.edit', $tour->id) }}"><img src="{{ !empty($tour->thumbnail)?$tour->thumbnail:asset('public/template/images/icon/album-img.png') }}" alt="{{ $tour->name }}" width="46" height="46"></a></td>
										<td><a href="{{ route('administrator.tour.edit', $tour->id) }}">{{ $tour->name }}</a> {!! $tour->day_tour?'- <br/>[Day Tour]':'' !!}</td>
										<td>
											{{ App\TourDestination::find($tour->depart_from)['name']}}
										</td>
										<td>
											{{ App\TourDestination::find($tour->going_to)['name']}}
										</td>
										<td>{{ $tour->duration > 1?$tour->duration." days":$tour->duration." day" }}</td>
										<td>
											{{ ex_destination($tour->destinations) }}	
										</td>
										<td>${{ $tour->price }}</td>
										<td align="center">
											<label>
												@if($tour->active)
												<input type="checkbox" data-id="{{ $tour->id }}" class="cbr cbr-secondary cb-active" checked>
												@else
												<input type="checkbox" data-id="{{ $tour->id }}" class="cbr cbr-secondary cb-active">
												@endif
											</label>
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
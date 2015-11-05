@extends('layout.admin')

@section('page-content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<form action="{{ url('administrator/review/update_reviews') }}" method="POST" name="frmReviews">
				{!! csrf_field() !!}
				<div class="panel-heading">
					<h3 class="panel-title">Tour Reviews</h3>

					<div class="panel-options">
						<div class="vertical-top">
							<a href="#" onclick="frmReviews.submit()" class="btn btn-red btn-icon btn-tool btn-sm">
								<i class="fa-trash"></i>
								<span>Delete</span>
							</a>

							<a href="{{ action('Admin\TourReviewController@create') }}" class="btn btn-blue btn-icon btn-tool btn-sm">
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
							$("#tbl-reviews").dataTable({
								// dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",
								aLengthMenu: [
									[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
								],
								columnDefs: [ { orderable: false, targets: [0,6] }],
								pageLength : 20,
							});

							// Replace checkboxes when they appear
							var $state = $("#tbl-reviews thead input[type='checkbox']");

							$("#tbl-reviews").on('draw.dt', function()
							{
								cbr_replace();

								$state.trigger('change');
							});

							// Script to select all checkboxes
							$state.on('change', function(ev)
							{
								var $chcks = $("#tbl-reviews tbody .cb-select");

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

						<table class="table table-striped" id="tbl-reviews">
							<thead>
								<tr>
									<th class="no-sorting">
										<input type="checkbox" class="cbr">
									</th>
									<th>#</th>
									<th>Name</th>
									<th>Nationality</th>
									<th class="text-center">Publish</th>
									<th>Created date</th>
									<th></th>
								</tr>
							</thead>

							<tbody class="middle-align">
								<?php $i = 1 ?>
								@foreach($reviews as $review)
									<tr>
										<td>
											<input type="checkbox" class="cbr cb-select" name="cbid[]" value="{{ $review->id }}">
										</td>
										<td>{{ $i }}</td>
										<td><a href="{{ route('administrator.review.edit', $review->id) }}">{{ $review->title.' '.$review->full_name }}</a></td>
										<td>{{ $review->nationality }}</td>
										<td align="center">
											<label>
												@if($review->active)
												<input type="checkbox" data-id="{{ $review->id }}" class="cbr cbr-secondary cb-active" checked>
												@else
												<input type="checkbox" data-id="{{ $review->id }}" class="cbr cbr-secondary cb-active">
												@endif
											</label>
										</td>
										<td>{{ date('M/d/Y', strtotime($review->created_at)) }}</td>
										<td>
											<a href="javascript:void(0);" onclick="deleteRow('review', {{ $review->id }}, this)" class="delete">
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

<script>
	$(document).ready(function() {
		// Click to publish or unpublish a review
		$('.cb-active').click(function(e) {
			// e.preventDefault();
            var id = $(this).attr('data-id');
            var active = $(this).prop('checked') ? 1 : 0;
            var dataString = 'id='+id+'&active='+active;
            $.ajax({
                type: "POST",
                url : "{{ url('administrator/review/set_active_status') }}",
                data : dataString,
                success : function(data){
                }
            },"json");
		});

	});

	function deleteRow (controller, id, object) {
		var row = $(object).parents('tr');
		var url = '/administrator/'+controller+'/'+id;

		$.ajax({
            type: "POST",
            url : window.location.protocol + "//" + window.location.host + "/" + window.location.pathname + id,
            data: {_method: 'delete', id :id},
            beforeSend: function() {
				row.css('background', '#fcf5a3');
			},
            success : function(data){
            	row.slideUp(300,function() {
					row.remove();
				});
            }
        },"json");
	}
</script>
@stop
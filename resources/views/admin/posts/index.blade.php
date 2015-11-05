@extends('layout.admin')

@section('page-content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<form action="{{ url('administrator/post/update_posts') }}" method="POST" name="frmPosts">
				{!! csrf_field() !!}
				<div class="panel-heading">
					<h3 class="panel-title">Posts list</h3>

					<div class="panel-options">
						<div class="vertical-top">
							<a href="#" onclick="frmPosts.submit()" class="btn btn-red btn-icon btn-tool btn-sm">
								<i class="fa-trash"></i>
								<span>Delete</span>
							</a>

							<a href="{{ action('Admin\PostController@create') }}" class="btn btn-blue btn-icon btn-tool btn-sm">
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
								columnDefs: [ { orderable: false, targets: [0,6] }],
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
									<th>Title</th>
									<th>Alias</th>
									<th class="text-center">Published</th>
									<th>Created date</th>
									<th></th>
								</tr>
							</thead>

							<tbody class="middle-align">
								<?php $i = 1 ?>
								@foreach($posts as $post)
									<tr>
										<td>
											<input type="checkbox" class="cbr cb-select" name="cbid[]" value="{{ $post->id }}">
										</td>
										<td>{{ $i }}</td>
										<td><a href="{{ route('administrator.post.edit', $post->id) }}">{{ $post->title }}</a></td>
										<td>{{ $post->alias }}</td>
										<td align="center">
											<label>
												@if($post->active)
												<input type="checkbox" data-id="{{ $post->id }}" class="cbr cbr-secondary cb-active" checked>
												@else
												<input type="checkbox" data-id="{{ $post->id }}" class="cbr cbr-secondary cb-active">
												@endif
											</label>
										</td>
										<td>{{ date('M/d/Y', strtotime($post->created_at)) }}</td>
										<td>
											<a href="javascript:void(0);" onclick="deleteRow('post', {{ $post->id }}, this)" class="delete">
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
		// Click to publish or unpublish a post
		$('.cb-active').click(function(e) {
			// e.preventDefault();
            var id = $(this).attr('data-id');
            var active = $(this).prop('checked') ? 1 : 0;
            var dataString = 'id='+id+'&active='+active;
            $.ajax({
                type: "POST",
                url : "{{ url('administrator/post/set_active_status') }}",
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
            url : window.location.protocol + "//" + window.location.hostname + url,
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
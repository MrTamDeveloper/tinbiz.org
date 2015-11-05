@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">Edit Tour Review</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">

				{!! Form::model($review, ['route' => ['administrator.review.update', $review->getRouteKey()], 'method' => 'put', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
					@include('admin/reviews/partials/form')
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@stop
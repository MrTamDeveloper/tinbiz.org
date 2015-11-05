@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">Edit Vietnam Destination</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">

				{!! Form::model($destination, ['route' => ['administrator.destination.update', $destination->getRouteKey()], 'method' => 'put', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
					@include('admin/destination/partials/form')
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@stop
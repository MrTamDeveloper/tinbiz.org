@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">New Vietnam Destinations</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::open(['route' => 'administrator.destination.store', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
					@include('admin/destination/partials/form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
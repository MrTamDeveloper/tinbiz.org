@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">New Content Category</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::open(['route' => 'administrator.category.store', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
					@include('admin/category/partials/form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
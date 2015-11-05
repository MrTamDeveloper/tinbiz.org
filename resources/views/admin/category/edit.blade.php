@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">Edit Content Category</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">

				{!! Form::model($category, ['route' => ['administrator.category.update', $category->getRouteKey()], 'method' => 'put', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
					@include('admin/category/partials/form')
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@stop
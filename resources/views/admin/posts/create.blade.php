@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">New Post</h1>
		<p class="description">Write new content for website</p>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::open(['route' => 'administrator.post.store', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
					@include('admin/posts/partials/form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
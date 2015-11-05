@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">Change Password</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			@if(session('error_message'))
			<div class="alert alert-danger">
				<strong>Error!</strong> {{ session('error_message') }}
			</div>
			@elseif(session('success_message'))
			<div class="alert alert-success">
				{{ session('success_message') }}
			</div>
			@endif
			<div class="panel-body">
				{!! Form::open(['url' => 'administrator/changepassword', 'role' => 'form', 'class' => 'validate form-horizontal']) !!}
					<div class="form-group">
						<div class="col-sm-2">
							{!! Form::label('old_password', 'Old Password', ['class' => 'control-label']) !!}
						</div>
						<div class="col-sm-6">
							{!! Form::password('old_password', ['class' => 'form-control', 'data-validate' => 'required']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2">
							{!! Form::label('new_password', 'New password', ['class' => 'control-label']) !!}
						</div>
						<div class="col-sm-6">
							{!! Form::password('new_password', ['class' => 'form-control', 'data-validate' => 'required', 'id' => 'new_password']) !!}
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2">
							{!! Form::label('confirm_password', 'Confirm password', ['class' => 'control-label']) !!}
						</div>
						<div class="col-sm-6">
							{!! Form::password('confirm_password', ['class' => 'form-control', 'data-validate' => "required, equalTo[#new_password]"]) !!}
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="{{ url('administrator') }}" class="btn btn-white">
							<i class="fa-long-arrow-left"></i> Go back
						</a>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
{!! HTML::script('jquery.validate.min.js') !!}
@stop
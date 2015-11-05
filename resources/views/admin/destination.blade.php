@extends('layout.admin')

@section('page-content')
	<div class="page-title">

		<div class="title-env">
			<h1 class="title">Vietnam Destination</h1>
			<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>
		</div>

		<div class="breadcrumb-env">
			<ol class="breadcrumb bc-1" >
				<li>
					<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
				</li>
				<li>

					<a href="forms-native.html">Forms</a>
				</li>
				<li class="active">

					<strong>Form Validation</strong>
				</li>
			</ol>
		</div>

	</div>

	<div class="panel panel-default">

		<div class="panel-heading">
			<div class="panel-title">
				Input validation
			</div>

			<small class="text-small pull-right" style="padding-top:5px;">
				<code>data-validate="rule1,rule2,...,ruleN"</code>
			</small>
		</div>

		<div class="panel-body">

			<form role="form" id="form1" method="post" class="validate">

				<div class="form-group">
					<label class="control-label">Required Field + Custom Message</label>

					<input type="text" class="form-control" name="name" data-validate="required" data-message-required="This is custom message for required field." placeholder="Required Field" />
				</div>

				<div class="form-group">
					<label class="control-label">Email Field</label>

					<input type="text" class="form-control" name="email" data-validate="email" placeholder="Email Field" />
				</div>

				<div class="form-group">
					<label class="control-label">Input Min Field</label>

					<input type="text" class="form-control" name="min_field" data-validate="number,minlength[4]" placeholder="Numeric + Minimun Length Field" />
				</div>

				<div class="form-group">
					<label class="control-label">Input Max Field</label>

					<input type="text" class="form-control" name="max_field" data-validate="maxlength[2]" placeholder="Maximum Length Field" />
				</div>

				<div class="form-group">
					<label class="control-label">Numeric Field</label>

					<input type="text" class="form-control" name="number" data-validate="number" placeholder="Numeric Field" />
				</div>

				<div class="form-group">
					<label class="control-label">URL Field</label>

					<input type="text" class="form-control" name="url" data-validate="required,url" placeholder="URL" />
				</div>

				<div class="form-group">
					<label class="control-label">Credit Card Field</label>

					<input type="text" class="form-control" name="creditcard" data-validate="required,creditcard" placeholder="Credit Card" />
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">Validate</button>
					<button type="reset" class="btn btn-white">Reset</button>
				</div>

			</form>

		</div>

	</div>

@stop

@section('script')
{!! HTML::script('jquery.validate.min.js') !!}
@stop
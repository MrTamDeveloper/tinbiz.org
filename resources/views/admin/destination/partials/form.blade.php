<div class="form-group">
	<div class="col-sm-2">
		{!! Form::label('name', 'Destination Name', ['class' => 'control-label']) !!}
	</div>
	<div class="col-sm-10">
		{!! Form::text('name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-sm-2">
		{!! Form::label('alias', 'Alias', ['class' => 'control-label']) !!}
	</div>
	<div class="col-sm-10">
		{!! Form::text('alias', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-sm-2">
		<label class="control-label">Region</label>
	</div>
	<div class="col-sm-4">
		{!! Form::select('region', [
			'Northern Vietnam' => 'Northern Vietnam',
			'Central Vietnam'  => 'Central Vietnam',
			'Southern Vietnam' => 'Southern Vietnam'
		], old('region'), ['class' => 'form-control']) !!}

	</div>
</div>

<div class="form-group">
	<div class="col-sm-2">
		<label class="control-label">Publish</label>
	</div>

	<div class="col-sm-10">
		<label class="radio-inline">
			{!! Form::radio('active', '1', true) !!}
			Yes
		</label>
		<label class="radio-inline">
			{!! Form::radio('active', '0') !!}
			No
		</label>
	</div>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-success">Submit</button>
	<a href="{{ route('administrator.destination.index') }}" class="btn btn-white">
		<i class="fa-long-arrow-left"></i> Go back
	</a>
</div>

{!! HTML::script('jquery.validate.min.js') !!}
<div class="form-group">
	{!! Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-4">
		{!! Form::select('title', [
			'Mr' => 'Mr',
			'Mss'  => 'Mss',
			'Mrs' => 'Mrs'
		], old('title'), ['class' => 'form-control']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('full_name', 'Fullname', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		{!! Form::text('full_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		{!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('avatar', 'Avatar', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		<div class="input-group" data-validate="required">
			{!! Form::text('avatar', null, ['class' => 'form-control no-right-border']) !!}
			<span class="input-group-btn">
				<a data-toggle="modal" data-target="#modalThumbnail" class="btn btn-success" type="button">Select</a>
			</span>
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::label('nationality', 'Nationality', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-4">
		{!! Form::select('nationality', array_combine(nation_array(), nation_array()) , old('nationality'), ['class' => 'form-control']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('review_title', 'Review Title', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		{!! Form::text('review_title', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('content', 'Content', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		{!! Form::textarea('content', null, ['class' => 'form-control', 'rows'=>'10', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('active', 'Publish', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
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
	<div class="col-md-4 col-sm-offset-2">
		<button type="submit" class="btn btn-success">Submit</button>
		<a href="{{ route('administrator.review.index') }}" class="btn btn-white">
			<i class="fa-long-arrow-left"></i> Go back
		</a>
	</div>
</div>

{!! HTML::script('jquery.validate.min.js') !!}

<div class="modal fade custom-width" id="modalThumbnail">
	<div class="modal-dialog" style="width: 60%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Select photo</h4>
			</div>

			<div class="modal-body">
				<iframe width="100%" height="400" frameborder="0" src="{{asset('public')}}/filemanager/dialog.php?type=2&field_id=avatar'&fldr="></iframe>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
		</div>
	</div>
</div>
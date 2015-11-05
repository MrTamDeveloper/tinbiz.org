<div class="form-group">
	{!! Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		{!! Form::text('title', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('alias', 'Alias', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		{!! Form::text('alias', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('parent', 'Parent', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-4">
		<?php
			$parents = ['0' => '--- None ---'];
			foreach ($categories as $cat) {
				if (isset($category) && $category->title == $cat->title) {
					continue;
				}
				$parents[$cat->id] = $cat->title;
			}
		?>
		{!! Form::select('parent', $parents , old('parent'), ['class' => 'form-control']) !!}

	</div>
</div>

<div class="form-group">
	{!! Form::label('description', 'Description', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-6 col-sm-10">
		{!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>'5']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-sm-offset-2">
		<button type="submit" class="btn btn-success">Submit</button>
		<a href="{{ route('administrator.category.index') }}" class="btn btn-white">
			<i class="fa-long-arrow-left"></i> Go back
		</a>
	</div>
</div>

{!! HTML::script('jquery.validate.min.js') !!}
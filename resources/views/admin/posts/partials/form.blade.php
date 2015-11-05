<div class="form-group">
	{!! Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
		{!! Form::text('title', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('alias', 'Alias', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
		{!! Form::text('alias', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('meta_title', 'Meta title', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
		{!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('meta_key', 'Meta keyword', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
		{!! Form::text('meta_key', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('meta_desc', 'Meta description', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
		{!! Form::text('meta_desc', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('summary', 'Summary', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
		{!! Form::textarea('summary', null, ['class' => 'form-control ckeditor', 'rows'=>'5']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('content', 'Content', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-md-8 col-sm-10">
		{!! Form::textarea('content', null, ['class' => 'form-control ckeditor', 'rows'=>'15', 'data-validate' => 'required']) !!}
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
	<div class="col-sm-offset-2">
		<button type="submit" class="btn btn-success">Submit</button>
		<a href="{{ route('administrator.post.index') }}" class="btn btn-white">
			<i class="fa-long-arrow-left"></i> Go back
		</a>
	</div>
</div>

{!! HTML::script('jquery.validate.min.js') !!}
@include('module.ckeditor.index')
<script>
	CKEDITOR.replace( 'summary' ,{
		filebrowserBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserUploadUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		height: 150,
		toolbarGroups: [
			{ name: 'document',	   groups: [ 'mode', 'document' ] },// Displays document group with its two subgroups.
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
	 		'/',													// Line break - next group will be placed in new line.
	 		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	 		{ name: 'links' },
	 		{ name: 'insert' },
	 		{ name: 'styles' },
			{ name: 'colors' },
		]
	});

	CKEDITOR.replace( 'content' ,{
		filebrowserBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserUploadUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
		height: 350,
		toolbarGroups: [
			{ name: 'document',	   groups: [ 'mode', 'document' ] },// Displays document group with its two subgroups.
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
	 		'/',													// Line break - next group will be placed in new line.
	 		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	 		{ name: 'links' },
	 		{ name: 'insert' },
	 		{ name: 'styles' },
			{ name: 'colors' },
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		]
	});
</script>
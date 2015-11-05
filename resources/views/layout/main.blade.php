<!DOCTYPE html>
<html>
<head>
	@include('module.head')

	{!! HTML::style('bootstrap.min.css') !!}
	{!! HTML::style('font-awesome.min.css') !!}
	{!! HTML::style('style.css') !!}
	{!! HTML::style('responsive.css') !!}

	{!! HTML::script('jquery.min.js') !!}
	{!! HTML::script('bootstrap.min.js') !!}
	{{-- Facebook api --}}

</head>
<body>
	@include('module.header')

	<div class="wapper">
		@yield('page-content')
	</div>

	@include('module.footer')
</body>
</html>
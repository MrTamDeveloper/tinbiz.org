<?php 
	$contents = file_get_contents(realpath(public_path('json/countries.json')));
    $countries = json_decode(stripslashes($contents), true);
?>
@foreach($countries as $item)
	<option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
@endforeach



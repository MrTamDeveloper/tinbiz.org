<?php
	/**
		* Create the HTML for a select nation tag.
		*
		* @param string $name
		* @param array 	$attributes
		* @param string $first
		* @param string $selected
	*/
	function nation_list( $name, $attributes = [], $first = null, $selected = null ) {
		$option = "";
		$contents = file_get_contents(realpath(public_path('json/countries.json')));
	    $countries = json_decode(stripslashes($contents), true);
	    $countries = array_values(array_sort($countries, function($value) {
		    return $value['name'];
		}));

		// check $first not empty set position first list
	    (!empty($first)) ? $option .= '<option value="">'. $first .'</option>' : '';

	    // run for option in select tag
	    foreach($countries as $item):
	    	($item['name'] == $selected) ? $select = "selected = 'selected'" : $select = "";
	    	$option .= "<option value='". $item['name'] ."' ". $select .">". $item['name'] ."</option>";
	    endforeach;

		return '<select name="'. $name .'"' .HTML::attributes($attributes) .'>'. $option .'</select>';
	}

	/**
		* Create the nation array
	*/
	function nation_array() {
		$option = "";
		$contents = file_get_contents(realpath(public_path('json/countries.json')));
	    $countries = json_decode(stripslashes($contents), true);
	    $countries = array_values(array_sort($countries, function($value) {
		    return $value['name'];
		}));

		$countries = array_map(function($country) {
		    return $country['name'];
		}, $countries);

		return $countries;
	}

	/**
		* Create the nation phone code array
	*/
	function nation_phone_code_array() {
		$option = "";
		$contents = file_get_contents(realpath(public_path('json/countries.json')));
	    $countries = json_decode(stripslashes($contents), true);
	    $countries = array_values(array_sort($countries, function($value) {
		    return $value['name'];
		}));

		$phoneCodes = array_map(function($country) {
		    return $country['phone'];
		}, $countries);

		return $phoneCodes;
	}

	/**
		* Create the nation phone list array, include nation name & phone code
		* Format like [nation_name][_][phone_code]. Ex: Australlia +61
	*/
	function nation_phone_array() {
		$option = "";
		$contents = file_get_contents(realpath(public_path('json/countries.json')));
	    $countries = json_decode(stripslashes($contents), true);
	    $countries = array_values(array_sort($countries, function($value) {
		    return $value['name'];
		}));

		$nationPhones = array_map(function($country) {
		    return $country['name'].' '.$country['phone'];
		}, $countries);

		return $nationPhones;
	}

	/**
		* Create the HTML for a select number tag.
		*
		* @param string 	$name
		* @param array 		$attributes
		* @param string 	$first
		* @param int 		$maxlength
		* @param boolean 	$plus
		* @param string 	$addstring
		* @param string $selected
	*/
	function number_list( $name, $attributes = [], $first = null, $maxlength = 20, $plus = false, $addstring = null, $selected = null) {
		$option = "";
		(!empty($first)) ? $option .= '<option value="">'. $first .' </option>' : '';

		for ($i=1; $i <= $maxlength; $i++) {
			($i == $selected) ? $select = "selected = 'selected'" : $select = "";
			($i == $maxlength && $plus) ? $addPlus = "+" : $addPlus = "";
			$option .= "<option value='". $i ."' ". $select .">". $i ." ". $addstring ." ". $addPlus ."</option>";
		}
		return '<select name="'. $name .'"'. HTML::attributes($attributes) .'>'. $option .'</select>';
	}

	function genTopicAlias($str)
	{
	    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		$str = str_replace(" ", "-", str_replace("&amp;*#39;","",$str));
		return $str;
	}

	// value: 50,60...:ha noi, ho chi minh json_encode
	// function destination_encode( $str ) {
	// 	$destination = [];
	// 	$temp = explode(':', $str);
	// 	foreach ($temp as $val) {
	// 		$destination[] = explode(',', $val);
	// 	}
	// 	return json_encode($destination);
	// }


	// function destination_decode( $json , $val, $arr = false ) {
	// 	$destination = json_decode($json);
	// 	if($val == 'name') {

	// 	}else if($val == 'id') {
	// 		if($arr) {
	// 			$str = $destination[0];
	// 		}else {

	// 		}
	// 	}else {
	// 		if($arr) {
				
	// 		}else {
	// 			$str = implode(",", $destination[0]).":".implode(",", $destination[1]);
	// 		}
	// 	}
	// 	return $str;
	// }

	function destination_encode( $str ) {
		return json_encode(explode(',', $str));
	}


	function destination_decode( $json ) {
		$destination = json_decode($json);
		return implode(",", $destination);
	}

	function ex_list_destination( $json = null, $format ) {
		$str = "";
		if(!empty($json)) {
			$temp = json_decode($json);
			$format == "name"?$temp = $temp[1]:$temp = $temp[0];
			$i = count($temp);
			$j = 1;
			$str = "";
			foreach ($temp as $val) {
				$j == $i?$str .= $val:$str .= $val." - ";
				$j++;
			}
		}
		return $str;
	}

	function ex_destination( $json = null) {
		$str = "";
		if(!empty($json)) {
			$temp = json_decode($json);
			$str = "";
			$i = count($temp);
			$j = 1;
			foreach ($temp as $val) {
				$j == $i?$str .= $val:$str .= $val." - ";
				$j++;
			}
		}
		return $str;
	}

	function str_format( $title = null, $duration ) {
		(!empty($title))?$str = $title.' - ': $str = "";
		if( $duration > 1 ) {
			if(($duration - 1) > 1) {
				$str .= $duration.' Days/ '.($duration-1).' Nights';
			}else {
				$str .= $duration.' Days/ '.($duration-1).' Night';
			}
		}else {
			$str .= $duration. ' Day';
		}
		return $str;
	}

	function create_permalink($alias) {
		$arr = explode('-', $alias);
		$temp = count($arr);
		$lastText = $arr[$temp-1];
		if( ctype_int($lastText) ) {
			$arr[$temp-1] = (int)$lastText+1;
			$str = implode('-',$arr);
		}else {
			$str = $alias."-1";
		}
		return $str;
	}

	function ctype_int($text) {
		return preg_match('/^-?[0-9]+$/', (string)$text) ? true : false;
	}

?>
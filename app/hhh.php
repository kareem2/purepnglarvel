<?php
die("ad");
if(!function_exists('remove_parameter_from_url')){

	function remove_query_from_url($url, $parameter){

		try {

			$url_components = parse_url($url);

			if(!empty($url_components['query'])){

				$query_parameters = array();

				parse_str($url_components['query'], $query_parameters);
				
				unset($query_parameters[$parameter]);
				
				$query_string = http_build_query($query_parameters);

				$url_components['query'] = $query_string;

				$url = build_parsed_url($url_components);

			}

		} catch (Exception $e) {
			return $url;
		}

		return $url;
	}
}


if(!function_exists('build_parsed_url')){

	function build_parsed_url($components){
		$url = '';
		$credintials = '';


		if(isset($components['scheme']))
			$scheme = "{$components['scheme']}://";

		if(isset($components['host']))
			$host = $components['host'];

		if(isset($components['port']))
			$port = ":{$components['port']}";

		if(isset($components['user']))
			$user = "{$components['user']}:";

		if(isset($components['pass']))
			$pass = $components['pass'];

		if(isset($components['path']))
			$path = $components['path'];

		if(isset($components['query']))
			$query = "?{$components['query']}";

		if(isset($components['fragment']))
			$fragment = "#{$components['fragment']}";

		if($user || $pass)
			$credintials = "{$user}{$pass}@";

		return "{$scheme}{$credintials}{$host}{$port}{$path}{$query}{$fragment}";

	}
}
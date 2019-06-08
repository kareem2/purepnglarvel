<?php

if(!function_exists('remove_parameter_from_url')){

	function remove_query_from_url($url, $parameter){

		$old_url = $url;
		
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
			return $old_url;
		}

		return $url;
	}
}


if(!function_exists('build_parsed_url')){

	function build_parsed_url($components){
		$url = '';
		$credintials = '';

		$scheme = null;
		$host = null;
		$port = null;
		$user = null;
		$pass = null;
		$path = null;
		$query = null;
		$fragment = null;
		$credintials = null;

		if(isset($components['scheme']) && !empty($components['scheme']))
			$scheme = "{$components['scheme']}://";

		if(isset($components['host']) && !empty($components['host']))
			$host = $components['host'];

		if(isset($components['port']) && !empty($components['port']))
			$port = ":{$components['port']}";

		if(isset($components['user']) && !empty($components['user']))
			$user = "{$components['user']}:";

		if(isset($components['pass']) && !empty($components['pass']))
			$pass = $components['pass'];

		if(isset($components['path']) && !empty($components['path']))
			$path = $components['path'];

		if(isset($components['query']) && !empty($components['query']))
			$query = "?{$components['query']}";

		if(isset($components['fragment']) && !empty($components['fragment']))
			$fragment = "#{$components['fragment']}";

		if($user || $pass)
			$credintials = "{$user}{$pass}@";

		return "{$scheme}{$credintials}{$host}{$port}{$path}{$query}{$fragment}";

	}
}
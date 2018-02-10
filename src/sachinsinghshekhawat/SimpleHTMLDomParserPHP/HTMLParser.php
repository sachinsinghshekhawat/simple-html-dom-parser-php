<?php

	namespace sachinsinghshekhawat\SimpleHTMLDomParserPHP;

	require 'simplehtmldom_1_5'.DIRECTORY_SEPARATOR.'simple_html_dom.php';
	class HTMLParser{
		
		static public function file_get_html($url) {
			return file_get_html($url);
		}
		static public function str_get_html($str) {
			return str_get_html($str);
		}
	}
	

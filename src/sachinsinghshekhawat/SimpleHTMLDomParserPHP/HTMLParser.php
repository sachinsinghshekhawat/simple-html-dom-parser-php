<?php

	namespace sachinsinghshekhawat\SimpleHTMLDomParserPHP;
	use sachinsinghshekhawat\SimpleHTMLDomParserPHP\simplehtmldom_1_5;
		
	class HTMLParser{
		
		/**
		 * get html
		 * @return \simplehtmldom_1_5\simple_html_dom
		 */
		static public function file_get_html() {
			return call_user_func_array ( '\simplehtmldom_1_5\file_get_html' , func_get_args() );
		}
		/**
		 * get html dom from string
		 * @return \simplehtmldom_1_5\simple_html_dom
		 */
		static public function str_get_html() {
			return call_user_func_array ( '\simplehtmldom_1_5\str_get_html' , func_get_args() );
		}
	}
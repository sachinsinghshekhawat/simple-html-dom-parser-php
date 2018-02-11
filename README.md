
simple-html-dom-parser-php
---------------------------

Version 1.1.5

Supports PHP >=5.6.32
Adaptation for Composer and PSR-0 of:
Its a HTML dom parser for PHP, you can either process a URL or HTML string, given function will return a DOM object, 
which can be used for further processing.

To get DOM object from a URL, use function file_get_html():
```
	$dom = HTMLParser::file_get_html("https://google.com");
```
To get DOM object from a string, use function str_get_html():
```
	$dom = HTMLParser::str_get_html("<html><head></head><body></body></html>");
```	
	
Install
----------------------------------

composer require sachinsinghshekhawat/simple-html-parser-php 1.1.5

Run "composer require sachinsinghshekhawat/simple-html-parser-php 1.1.5" in your project and ready to go. You can 
replace last argument with any of the version available.



Usage
------------------------------
```
<?php

	use sachinsinghshekhawat\SimpleHTMLDomParserPHP\HTMLParser;
	require 'vendor/autoload.php'; //change path of your vendor autload file
	
	$dom = HTMLParser::file_get_html("https://google.com");
	
	foreach($dom->find('img') as $element) 
	   echo $element->src . '<br>';
```
------------------------------

For more documentations:
	http://simplehtmldom.sourceforge.net/
<?php

class control
{
	function __construct()
	{
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			case '/gallery':
			include_once('gallery.php');
			break;
			case '/about':
			include_once('about.php');
			break;
			case '/contact':
			include_once('contact.php');
			break;
			case '/services':
			include_once('services.php');
			break;
			case '/login':
			include_once('login.php');
			break;
			case '/signup':
			include_once('signup.php');
			break;
			
			default:
			include_once('blog.php');
			break;
			
			
		}
	}
}

$obj=new control;
?>
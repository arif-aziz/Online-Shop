<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Online Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="/css/bootstrap-simplex.css" rel="stylesheet">
	<link href="/css/charisma-app.css" rel="stylesheet">
	<link href="/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='/css/fullcalendar.css' rel='stylesheet'>
	<link href='/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='/css/chosen.css' rel='stylesheet'>
	<link href='/css/uniform.default.css' rel='stylesheet'>
	<link href='/css/colorbox.css' rel='stylesheet'>
	<link href='/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='/css/jquery.noty.css' rel='stylesheet'>
	<link href='/css/noty_theme_default.css' rel='stylesheet'>
	<link href='/css/elfinder.min.css' rel='stylesheet'>
	<link href='/css/elfinder.theme.css' rel='stylesheet'>
	<link href='/css/opa-icons.css' rel='stylesheet'>
	<link href='/css/uploadify.css' rel='stylesheet'>
	<link href='/css/cssshop.css' rel='stylesheet'>
	<link href='/css/cssshop2.css' rel='stylesheet'>
	<link href='/css/DT_bootstrap.css' rel='stylesheet'>
	<link href="/css/bootstrap-fileupload.css" rel="stylesheet"> 

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">

		<!-- jQuery -->
	<script src="/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="/js/jquery-ui-1.8.21.custom.min.js"></script>
	
		
</head>

<body>

@include('layouts.adminheader')

@yield('container')		

@include('layouts.footer')

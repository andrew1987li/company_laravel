<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="@yield('metadescription')">
	    <meta name="author" content="@yield('metaauthor')">		

		<title>@yield('title')</title>

		<style>
			ul{list-style: none;} ul li{list-style: none;}
		</style>
	    <link rel="shortcut icon" href="/assets/images/ico/favicon.ico">
	        
	    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">

   		@include('templates.mainlinks')

	    <script defer="defer" src="/assets/js/jquery.js"></script>
	    <script defer="defer" src="/assets/js/bootstrap.min.js"></script>   		
   		@include('templates.mainjs')
	</head>

	<body>
		@section('navbar')
		@show
		
		@yield('content')

		@yield('footer')
	</body>

	@yield('additional_js')
</html>
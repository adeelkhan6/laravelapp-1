<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title', 'Laravel6')</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />


<!-- @yield('head'); importing css only for one view ( create ) -->


<link href="{{ asset('css/app.css') }} rel="stylesheet" />
<link href="{{ asset('css/default.css') }}" rel="stylesheet" />
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />

</head>
<body>
	<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="{{ asset('/') }}">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}">
                    <a href="#"></a>
                </li>
                <li class="{{ Request::is('contact') ? 'current_page_item' : '' }}">
                    <a href="#"></a>
                </li>
                <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}">
                	<a href="{{ asset('/') }}" accesskey="1" title="">Homepage</a>
                </li>
                <li  class="{{ Request::path() === 'clients' ? 'current_page_item' : '' }}">
                	<a href="#" accesskey="2" title="">Our Clients</a>
                </li>
                <li class="{{ Request::path() === 'about' ? 'current_page_item' : ''}}">
                	<a href="{{ asset('/about') }}" accesskey="3" title="">About Us</a>
                </li>
                <li  class="{{ Request::path() === 'articles' ? 'current_page_item' : '' }}">
                	<a href="{{ asset('articles') }}" accesskey="4" title="">Articles</a>
                </li>
                <li  class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}">
                	<a href="#" accesskey="5" title="">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    	@yield ('header')
</div>
    	@yield ('content')

        <div id="copyright" class="container">
            <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
        </div>

        <script src="js/app.js"></script>
</body>
</html>

@extends('layout')

@section ('header')
   
    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                <h2>Maecenas luctus lectus</h2>
                <p>This is <strong>SimpleWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
                <a href="#" class="button">Etiam posuere</a> </div>
        </div>
    </div>

    <div style="margin-left: 80px;">
            <h1 style="color: yellow">My Site</h1>

            @can('edit_forum')
            
                <li style="list-style: none;">
                    <p><a style="color: yellow;" href="#">Edit Forum</a></p>
                </li>

            @endcan

            @can('view_reports')
            
            <li style="list-style: none;">
                <p><a style="color: yellow;" href="{{ asset('/reports') }}">View Reports</a></p>
            </li>

        @endcan

    </div>

@endsection
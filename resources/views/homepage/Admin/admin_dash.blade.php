@extends('layouts.main')
@section('title', 'Admin page')
@section('assets')
    <script src="{{ asset('js/admin-script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
@endsection
@section('body')
    @include('layouts.admin_nav')
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <h2>Animated Sidenav Example</h2>
    <p>Click on the element below to open the side navigation menu.</p>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
@endsection

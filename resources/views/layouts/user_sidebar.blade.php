@extends('layouts.nav')
@section('navbar')
    <div class="mr-4">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{ route('user.dashboard') }}">Main Dashboard</a>
            <a href="{{ route('userdash.gym_detail', ['id' => Auth::user()->id]) }}">Gym Detail</a>
            <a href="{{ route('userdash.gym_calender') }}">Calendar and Events</a>
        </div>

        <button style="font-size:28px;cursor:pointer;" class="btn" onclick="openNav()">&#9776;</button>
    </div>
@endsection

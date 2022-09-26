@extends('layouts.main')
@section('title', 'Edit User Profile')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    {{-- <script src="{{ asset('js/confirmpass.js') }}"></script> --}}
@endsection
@section('body')
    @include('layouts.nav')
    @if (Auth::user()->personal == false)
        @include('Personalforms.set_personal')
    @else
        @include('Personalforms.update_personal')
    @endif
@endsection

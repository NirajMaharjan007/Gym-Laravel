@extends('layouts.main')
@section('title', 'User Profile')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('body')
    @include('layouts.nav')
    <section id="about" class="section about-section">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="end-alignment">
                        <a class="btn btn-primary bg-info text-white"
                            href="{{ route('update.profile', ['info' => Auth::user()->id]) }}" role="button">Edit</a>
                    </div>
                    <div class="about-text go-to">
                        <h3 class="dark-color">About Me</h3>
                        <h6 class="theme-color lead">
                            @if (auth()->user()->personal == true)
                                <p>{{ Auth::user()->personal->type }}</p>
                            @else
                                <p>null</p>
                            @endif
                        </h6>
                        <p>
                            This is the information about user {{ Auth::user()->name }}.
                        </p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Name</label>
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                                <div class="media">
                                    <label>Birthday</label>
                                    @if (auth()->user()->personal == true)
                                        <p>{{ Auth::user()->personal->dob }}</p>
                                    @else
                                        <p>null</p>
                                    @endif

                                </div>

                                <div class="media">
                                    <label>Address</label>
                                    @if (auth()->user()->personal == true)
                                        <p>{{ Auth::user()->personal->address }}</p>
                                    @else
                                        <p>null</p>
                                    @endif
                                </div>

                                <div class="media">
                                    <label>Residence</label>
                                    @if (auth()->user()->personal == true)
                                        <p>{{ Auth::user()->personal->residence }}</p>
                                    @else
                                        <p>null</p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="media">
                                    <label>Gender</label>
                                    <p>{{ Auth::user()->gender }}</p>
                                </div>
                                <div class="media">
                                    <label>E-mail</label>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    @if (auth()->user()->personal == true)
                                        <p>{{ Auth::user()->personal->phone }}</p>
                                    @else
                                        <p>null</p>
                                    @endif
                                </div>
                                {{-- <div class="media">
                                    <label>Work</label>
                                    <p>Yes</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        @if (auth()->user()->personal == true)
                            <img src="{{ url('uploads/' . Auth::user()->personal->picture) }}"
                                alt="picture of {{ Auth::user()->name }}" class="center-img profile-img mb-2" />
                        @else
                            <img alt="picture of {{ Auth::user()->name }}" class="center-img profile-img"
                                src="{{ asset('img/default.png') }}" />
                        @endif
                    </div>
                </div>
            </div>
            <div class="counter">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2">Null</h6>
                            <p class="m-0px font-w-600">Workout Days</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2">Null</h6>
                            <p class="m-0px font-w-600">Absents Days</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2">Null</h6>
                            <p class="m-0px font-w-600">Workout Completed</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <h6 class="count h2">{{ date('Y/m/d', strtotime(Auth::user()->created_at)) }}</h6>
                            <p class="m-0px font-w-600">Joined Date</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

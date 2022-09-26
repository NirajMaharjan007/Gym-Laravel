@extends('layouts.main')
@section('title', 'Pricing')
@section('assets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endsection
@section('body')
    @include('layouts.nav')

    <section class="pricing-area section-padding30 fix">

        <div class="row center-alignment mb-4">
            <h1>Choose your Plan</h1>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="properties mb-30">
                    <div class="properties__card">
                        <div class="about-icon">
                            {{-- <img src="{{ asset('img/icon/price.png') }}" alt=""> --}}
                            <img src="{{ asset('img/logo-circular.png') }}" alt="" class="icon-pricing">
                        </div>
                        <div class="properties__caption">
                            <span class="month">3 month</span>
                            <p class="mb-25">Rs 1500 </p>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Free riding </p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Unlimited equipments</p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Personal trainer</p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Weight losing classes</p>
                                </div>
                            </div>
                            <div class="single-features mb-20">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Month to mouth</p>
                                </div>
                            </div>
                            @if (Auth::check() == false)
                                <button onclick="alert('You need to login')" class="btn border-btn2">Choose Now</button>
                            @else
                                <a href="{{ route('get.price', ['date' => 3, 'price' => 1500]) }}"
                                    class="btn border-btn2">Choose Now</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="properties mb-30">
                    <div class="properties__card">
                        <div class="about-icon">
                            {{-- <img src="{{ asset('img/icon/price.png') }}" alt=""> --}}
                            <img src="{{ asset('img/logo-circular.png') }}" alt="" class="icon-pricing">
                        </div>
                        <div class="properties__caption">
                            <span class="month">6 month</span>
                            <p class="mb-25">Rs 3000 </p>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Free riding </p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Unlimited equipments</p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Personal trainer</p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Weight losing classes</p>
                                </div>
                            </div>
                            <div class="single-features mb-20">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Month to mouth</p>
                                </div>
                            </div>
                            @if (Auth::check() == false)
                                <button onclick="alert('You need to login')" class="btn border-btn2">Choose Now</button>
                            @else
                                <a href="{{ route('get.price', ['date' => 6, 'price' => 3000]) }}"
                                    class="btn border-btn2">Choose Now</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="properties mb-30">
                    <div class="properties__card">
                        <div class="about-icon">
                            {{-- <img src="{{ asset('img/icon/price.png') }}" alt=""> --}}
                            <img src="{{ asset('img/logo-circular.png') }}" alt="" class="icon-pricing">
                        </div>
                        <div class="properties__caption">
                            <span class="month">12 month</span>
                            <p class="mb-25">Rs 4500</p>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Free riding </p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Unlimited equipments</p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Personal trainer</p>
                                </div>
                            </div>
                            <div class="single-features">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Weight losing classes</p>
                                </div>
                            </div>
                            <div class="single-features mb-20">
                                <div class="features-icon">
                                    <img src="{{ asset('img/icon/check.svg') }}" alt="">
                                </div>
                                <div class="features-caption">
                                    <p>Month to mouth</p>
                                </div>
                            </div>
                            @if (Auth::check() == false)
                                <button onclick="alert('You need to login')" class="btn border-btn2">Choose Now</button>
                            @else
                                <a href="{{ route('get.price', ['date' => 12, 'price' => 4500]) }}"
                                    class="btn border-btn2">Choose Now</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @include('layouts.footer')
@endsection

@extends('layouts.main')
@section('assets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/gym-style.css') }}">
@endsection
@section('title', 'Home page')
@section('body')
    @include('layouts.nav')
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('img/gym-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h4>work harder, get stronger</h4>
                <h2>easy with our <em>gym</em></h2>
                <h6>We are Fitness Heros</h6>
            </div>
        </div>
    </div>

    <section class="section" id="features" style="margin-top:10px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        {{-- <img src="{{ asset('img/logo.png') }}" alt="Logo" height="50px"> --}}
                        <h2>Choose <em>Program</em></h2>
                        <p>We are the Fitness Heros. We are here to help you to improve your fitness</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                {{-- <img src="{{ asset('img/features-first-icon.png') }}" alt="First One"> --}}
                                <img src="{{ asset('img/features-first-icon.png') }}" alt="First One"
                                    style="border-radius:8px;">
                            </div>
                            <div class="right-content">
                                <h4>Basic Fitness</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection
                                    website. This is not allowed.</p>
                                <a href="{{ route('class.basicfitness') }}" class="text-button">Learn More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('img/features-first-icon.png') }}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us.
                                    We appreciate it a lot.</p>
                                <a href="{{ route('class.gymtraining') }}" class="text-button">Learn More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('img/features-first-icon.png') }}" alt="Third One"
                                    style="border-radius:8px;">
                            </div>
                            <div class="right-content">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel="nofollow" href="https://www.pexels.com" target="_blank">Pexels
                                        website</a> for images and video background used in this HTML template.</p>
                                <a href="{{ route('class.basicmuscle') }}" class="text-button">Learn More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('img/features-first-icon.png') }}" alt="Fourth One"
                                    style="border-radius:8px;">
                            </div>
                            <div class="right-content">
                                <h4>Zumba</h4>
                                <p>You may want to browse through <a rel="nofollow"
                                        href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital
                                        Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a>
                                    HTML CSS templates on our website.</p>
                                <a href="{{ route('class.zumba') }}" class="text-button">Learn More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('img/features-first-icon.png') }}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns
                                    and sections.</p>
                                <a href="{{ route('class.yoga') }}" class="text-button">Learn More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('img/features-first-icon.png') }}" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh
                                    sapien, vehicula et auctor.</p>
                                <a href="{{ route('class.bodybuilding') }}" class="text-button">Learn More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="call-to-action">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Don't <em>think</em>, begin <em>today</em>!</h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio
                        augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    <div class="main-button scroll-to-section">
                        <a style="padding:18px" href="{{ route('the_classes') }}" class="btn btn-primary" role="button">
                            Take a class</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="schedule">
        <div class="container" id="no-background">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Fitness Class</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">
                                        2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Zumba class</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Expert <em>Trainers</em></h2>
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('img/first-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Strength Trainer</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('img/second-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Muscle Trainer</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('img/third-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Power Trainer</span>
                            <h4>Paul D. Newman</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <!-- All scripts --->
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imgfix.min.js') }}"></script>
    <script src="{{ asset('js/mixitup.js') }}"></script>
    <script src="{{ asset('js/accordions.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>

@endsection

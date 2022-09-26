@extends('layouts.main')
@section('title', 'class')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/gym-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
@endsection
@section('body')
    {{-- Its abouts Classes --}}
    @include('layouts.nav')
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'>Zumba Class</a></li>
                        <li><a href='#tabs-2'>Yoga Class</a></li>
                        <li><a href='#tabs-3'>Basic Muscle Course</a></li>
                        <li><a href='#tabs-4'>Basic Fitness Class</a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="{{ asset('img/class/zumba.jpg') }}" alt="First Class" height="300" width="700">
                            <h4>Zumba Class</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend
                                hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem
                                tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut,
                                accumsan diam.</p>
                            <div class="main-button">
                                @if (Auth::check() == false)
                                    <a onclick="alert('You must be logged in')" class="btn btn-primary">View
                                        Schedule</a>
                                @elseif(Auth::user()->price == false)
                                    <a onclick="alert('Must choose Plan')" class="btn btn-primary">View
                                        Schedule</a>
                                @else
                                    <a href="{{ route('schedule', ['training' => 'Zumba']) }}" class="btn btn-primary">
                                        View Schedule</a>
                                @endif
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="{{ asset('img/class/yoga.jpg') }}" alt="Second Training" width="700" height="300">
                            <h4>Yoga Class</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a
                                velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus
                                nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">
                                @if (Auth::check() == false)
                                    <a onclick="alert('You must be logged in')" class="btn btn-primary">View
                                        Schedule</a>
                                @elseif(Auth::user()->price == false)
                                    <a onclick="alert('Must choose Plan')" class="btn btn-primary">View
                                        Schedule</a>
                                @else
                                    <a href="{{ route('schedule', ['training' => 'Yoga']) }}" class="btn btn-primary">
                                        View Schedule</a>
                                @endif
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="{{ asset('img/class/Basic Muscle Course.jpg') }}" alt="Third Class">
                            <h4>Basic Muscle Course</h4>
                            <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit
                                amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id
                                scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel,
                                accumsan a neque.</p>
                            <div class="main-button">
                                @if (Auth::check() == false)
                                    <a onclick="alert('You must be logged in')" class="btn btn-primary">View
                                        Schedule</a>
                                @elseif(Auth::user()->price == false)
                                    <a onclick="alert('Must choose Plan')" class="btn btn-primary">View
                                        Schedule</a>
                                @else
                                    <a href="{{ route('schedule', ['training' => 'Basic Muscle']) }}"
                                        class="btn btn-primary">
                                        View Schedule</a>
                                @endif
                            </div>
                        </article>
                        <article id='tabs-4'>
                            <img src="{{ asset('img/class/basic fitness.jpg') }}" alt="Fourth Training" height="300"
                                width="700">
                            <h4>Basic Fitness Class</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget
                                venenatis ipsum commodo et.</p>
                            <div class="main-button">
                                @if (Auth::check() == false)
                                    <a onclick="alert('You must be logged in')" class="btn btn-primary">View
                                        Schedule</a>
                                @elseif(Auth::user()->price == false)
                                    <a onclick="alert('Must choose Plan')" class="btn btn-primary">View
                                        Schedule</a>
                                @else
                                    <a href="{{ route('schedule', ['training' => 'Basic Fitness']) }}"
                                        class="btn btn-primary">
                                        View Schedule</a>
                                @endif
                            </div>
                        </article>
                    </section>
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

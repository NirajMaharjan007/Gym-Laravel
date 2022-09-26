@extends('layouts.main')
@section('title', 'About Us')
@section('body')
    @include('layouts.nav')
    <div class="container">
        <div class="container-fluid">
            <h2>About Us</h2>
            <div class="line"></div>
            <div>
                <Strong>Who Are We?</Strong>
                <p>
                    We are Fitness Heroes. Easy with our gym. No pain no gain. Work harder get Stronger.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate, ligula quis vulputate euismod,
                    dui ipsum suscipit libero, eu lobortis turpis risus in diam. Donec justo est, hendrerit eu augue ac,
                    bibendum efficitur ipsum. Fusce maximus nibh mattis auctor facilisis. Proin vel velit ut tortor pulvinar
                    auctor. Phasellus blandit sit amet lorem sit amet vehicula. Suspendisse ut justo eget metus dictum
                    hendrerit quis quis nulla. Vestibulum vestibulum non urna nec porttitor. Curabitur sagittis, libero in
                    lacinia vulputate, lectus felis fringilla velit, ut dictum metus neque vel eros. Fusce eget molestie
                    est. Nulla ut nisl faucibus tellus sagittis ultricies non sodales diam. Integer vitae odio ac felis
                    fringilla tincidunt nec in elit.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <h4>Our Team</h4>
            <div class="line"></div>
            <div class="row mt-4">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="box">
                            <img src="{{ asset('img/default.png') }}" alt="Binita Lamichhane" class="team-pic">
                            <div class="line"></div>
                            <p>Name: <strong>Binita Lamichhane</strong></p>
                            <p>Email: <strong>
                                    <a class="mail"
                                        href="mailto:lamichhanebinita57@gmail.com">lamichhanebinita57@gmail.com</a>
                                </strong></p>
                            <p>Contact: <strong>9808280005</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="box">
                            <img src="{{ asset('img/default.png') }}" alt="Jenisha Karki" class="team-pic">
                            <div class="line"></div>
                            <p>Name: <strong>Jenisha Karki</strong></p>
                            <p>Email: <strong>
                                    <a class="mail"
                                        href="mailto:jenishakarki8@gmail.com">jenishakarki8@gmail.com</a>
                                </strong></p>
                            <p>Contact: <strong>9840259835</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="box">
                            <img src="{{ asset('img/default.png') }}" alt="Niraj Maharjan" class="team-pic">
                            <div class="line"></div>
                            <p>Name: <strong>Niraj Maharjan</strong></p>
                            <p>Email: <strong>
                                    <a class="mail"
                                        href="mailto:niraj.mhrjn770@gmail.com">niraj.mhrjn770@gmail.com</a>
                                </strong></p>
                            <p>Contact: <strong>9813545029</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="box">
                            <img src="{{ asset('img/default.png') }}" alt="Ruses Maharjan" class="team-pic">
                            <div class="line"></div>
                            <p>Name: <strong>Ruses Maharjan</strong></p>
                            <p>Email: <strong>
                                    <a class="mail"
                                        href="mailto:pandamaharjan@gmail.com">pandamaharjan@gmail.com</a>
                                </strong></p>
                            <p>Contact: <strong>9813213111</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="box">
                            <img src="{{ asset('img/default.png') }}" alt="Samir Maharjan" class="team-pic">
                            <div class="line"></div>
                            <p>Name: <strong>Samir Maharjan</strong></p>
                            <p>Email: <strong>
                                    <a class="mail"
                                        href="mailto:sameermaharjan982@gmail.com">sameermaharjan982@gmail.com</a>
                                </strong></p>
                            <p>Contact: <strong>9840332267</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

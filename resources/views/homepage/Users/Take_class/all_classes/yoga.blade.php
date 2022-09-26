@extends('layouts.main')
@section('title', 'Yoga')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
@endsection
@section('body')
    @include('layouts.nav')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <h1 class="col-6">Yoga</h1>
                <div class="col-6 end-alignment">
                    <a href="{{ route('landing-page') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="line"></div>
            <div class="row">
                <p class="col-12">
                    Regular yoga practice may reduce levels of stress and body-wide inflammation, contributing to healthier
                    hearts. Several of the factors contributing to heart disease, including high blood pressure and excess
                    weight, can also be addressed through yoga.
                </p>

                <p class="col-md-12">
                    You may feel increased mental and physical energy, a boost in alertness and enthusiasm, and fewer
                    negative feelings after getting into a routine of practicing yoga.
                </p>
            </div>

            <h4>Details</h4>
            <div class="line"></div>
            <div class="row">
                <p class="col-md-12">
                    Participating in yoga classes can ease loneliness and provide an environment for group healing and
                    support. Even during one-on-one sessions loneliness is reduced as one is acknowledged as a unique
                    individual, being listened to and participating in the creation of a personalized yoga plan.
                </p>

                <p class="col-md-12">
                    Participating in yoga classes can ease loneliness and provide an environment for group healing and
                    support. Even during one-on-one sessions loneliness is reduced as one is acknowledged as a unique
                    individual, being listened to and participating in the creation of a personalized yoga plan.
                </p>

                <p class="col-md-12">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque similique illo excepturi. Cumque
                    blanditiis nostrum, fuga amet illo, voluptas minus cum veritatis officiis modi harum beatae, architecto
                    debitis? Repellat, deserunt?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatibus quis laudantium
                    temporibus, facilis modi quo. Nemo pariatur consequuntur quibusdam, ipsam quam, iste, alias labore
                    eveniet quo vitae repellendus soluta.
                </p>
            </div>


            <div class="link-info bottom end-alignment mt-4"><a class="btn btn-info"
                    href="https://en.wikipedia.org/wiki/Yoga" target="_blank">More Info about Yoga (Wikipedia)</a>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

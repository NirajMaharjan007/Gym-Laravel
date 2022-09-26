@extends('layouts.main')
@section('title', 'Zumba')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
@endsection
@section('body')
    @include('layouts.nav')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h1>Zumba</h1>
                </div>
                <div class="col-6 end-alignment">
                    <a href="{{ route('landing-page') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="line"></div>
            <div class="row">
                <p class="col-12">
                    Zumba is a fitness program that involves cardio and Latin-inspired dance. It was founded by
                    Colombian
                    dancer
                    and choreographer Beto Pérez in 2001,and by 2012, it called itself the largest international branded
                    fitness program in the world. Zumba is a trademark owned by Zumba Fitness, LLC.
                </p>

                <p class="col-md-12">
                    Zumba is a fitness program that involves cardio and Latin-inspired dance. It was founded by
                    Colombian
                    dancer
                    and choreographer Beto Pérez in 2001,and by 2012, it called itself the largest international branded
                    fitness program in the world. Zumba is a trademark owned by Zumba Fitness, LLC.
                </p>
            </div>

            <h4>Origin</h4>
            <div class="line"></div>
            <p>
                Zumba was created in the 1990s by dancer and choreographer Beto Pérez, an aerobics instructor in Cali,
                Colombia. After forgetting his usual music one day, and using cassette tapes of Latin dance music (salsa and
                merengue) for class, Pérez began integrating the music and dancing into other classes, calling it
                "Rumbacize".[3][4]

                In 2001, Pérez partnered with Alberto Perlman and Alberto Aghion to launch Zumba, and the trio released a
                series of fitness videos sold via infomercial.[5] Pérez decided on the word "Zumba" because of its
                similarity to the word "rumba", the Cuban musical genre. Pérez and his partner began to replace the first
                letter of "rumba" until they landed on "sumba", and Pérez ultimately decided to spell it with the letter 'z'
                because he liked the fictional character Zorro when he was a child.[6]

                In 2012, Insight Venture Partners and the Raine Group invested in the venture.[7][8] The company expanded
                into class instruction, and by 2015, according to Perlman, there were 14 million Zumba students in 186
                countries.[9]</p>

            <div class="link-info bottom end-alignment mt-4"><a class="btn btn-info"
                    href="https://en.wikipedia.org/wiki/Zumba" target="_blank">More Info about Zumba (Wikipedia)</a>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

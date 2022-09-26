@extends('layouts.main')
@section('title', 'Basic Muscle Training')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
@endsection
@section('body')
    @include('layouts.nav')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <h1 class="col-6">Basic Muscle Training</h1>
                <div class="col-6 end-alignment">
                    <a href="{{ route('landing-page') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="line"></div>
            <div class="row">
                <p class="col-12">This is one in a series of regular weight training programs. Each program is
                    optimized for a specific outcome including general fitness, weight loss, body shaping, and
                    sport-specific programs.

                    This strength and muscle program is not just for beginners. You should use it if you want a formalized
                    and precise program following casual experience with weights. As the name implies, it's an all-around
                    program for basic strength and muscle building. This could be used in off-season training if your sport
                    has elements of strength, power and muscular endurance, which fits many sports. Consult your coach to
                    ensure it doesn't conflict with other training priorities. Training programs are always most efficient
                    when tailored specifically for individuals and their goals.

                    It’s worth reading the introductory weight training information before starting this program, or any
                    program for that matter. The exercises use the standard free weights and equipment found in most gyms.
                    All exercises can be done at home if you have the appropriate home gym equipment. A medical examination
                    and clearance is wise if you've been sedentary for a lengthy period. Take care with injured or
                    dysfunctional joints. Get medical advice before starting weight training if this applies to you.</p>
            </div>

            <h4>Brief </h4>
            <div class="line"></div>
            <div class="row">
                <strong class="col-md-12">Also called as Strength training </strong>
                <p class="col-md-12">
                    Strength training or resistance training involves the performance of physical exercises that are
                    designed to improve strength and endurance. It is often associated with the lifting of weights. It can
                    also incorporate a variety of training techniques such as calisthenics, isometrics, and plyometrics.[1]

                    When properly performed, strength training can provide significant functional benefits and improvement
                    in overall health and well-being, including increased muscle, tendon, ligament and bone strength and
                    toughness, improved joint function, reduced potential for injury,[2] increased bone density, increased
                    metabolism, increased fitness[3][4] and improved cardiac function.[5] Training commonly uses the
                    technique of progressively increasing the force output of the muscle through incremental weight
                    increases and uses a variety of exercises and types of equipment to target specific muscle groups.
                    Strength training is primarily an anaerobic activity, although some proponents have adapted it to
                    provide the benefits of aerobic exercise through circuit training.[6]

                    Strength training typically produces lactate in the muscles, which is a limiting factor of exercise
                    performance. Regular endurance exercise leads to adaptations in skeletal muscle which can prevent
                    lactate levels from rising during strength training.

                    For many sports and physical activities, strength training is central or is used as part of their
                    training regimen.
                </p>

                <strong class="col-md-12">Principles and training methods</strong>
                <p class="col-md-12">The basic principles of strength training involve repeated overloading of a group
                    of muscles, typically by lifting and lowering a heavy weight for 4-12 consecutive repetitions until
                    failure.[40] Equally important is to progressively increase the lifted weight by each week of
                    training.[41] When lifting the weight, involved muscles are shortening; performing so called concentric
                    muscle contraction. The weight thereafter is lowered while the same muscles perform so called eccentric
                    muscle actions at an identical load. The eccentric muscle loading has shown essential to develop both
                    maximal strength and muscle hypertrophy.[42] A manipulation of the number of repetitions, sets, tempo,
                    exercises and force are suggested to cause specific and desired changes in strength, endurance or size,
                    although recent scientific studies have weakened the support for such anticipations</p>

                <p class="col-md-12">
                    Typically, failure to use good form during a training set can result in injury or an inability to meet
                    training goals. When the desired muscle group is not challenged sufficiently, the threshold of overload
                    is never reached and the muscle does not gain in strength. There are cases when cheating is beneficial,
                    as is the case where weaker groups become the weak link in the chain and the target muscles are never
                    fully exercised as a result.
                </p>
            </div>


            <div class="link-info bottom end-alignment mt-4"><a class="btn btn-info"
                    href="https://en.wikipedia.org/wiki/Strength_training" target="_blank">More Info about Basic Muscle
                    Training
                    (Wikipedia)</a>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

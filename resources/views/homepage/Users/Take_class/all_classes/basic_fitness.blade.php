@extends('layouts.main')
@section('title', 'Basic Fitness')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
@endsection
@section('body')
    @include('layouts.nav')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <h1 class="col-6">Basic Fitness</h1>
                <div class="col-6 end-alignment">
                    <a href="{{ route('landing-page') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="line"></div>
            <div class="row">
                <p class="col-12">
                    Basic Fitness or <i> General fitness training </i> works towards broad goals of overall health and
                    well-being, rather than narrow
                    goals of sport competition, larger muscles or concerns over appearance. A regular moderate workout
                    regimen and healthy diet can improve general appearance markers of good health such as muscle tone,
                    healthy skin, hair and nails, while preventing age or lifestyle-related reductions in health and the
                    series of heart and organ failures that accompany inactivity and poor diet.

                    Diet itself helps to increase calorie burning by boosting metabolism, a process further enhanced while
                    gaining more lean muscle. An aerobic exercise program can burn fat and increase the metabolic rate.
                </p>

                <p class="col-md-12">
                    You may feel increased mental and physical energy, a boost in alertness and enthusiasm, and fewer
                    negative feelings after getting into a routine of practicing yoga.
                </p>
            </div>

            <h4>Brief Summary</h4>
            <div class="line"></div>
            <div class="row">
                <strong class="col-md-12">Diet</strong>
                <p class="col-md-12">
                    Diet itself helps to increase calorie burning by boosting metabolism, a process further enhanced while
                    gaining more lean muscle. An aerobic exercise program can burn fat and increase the basal metabolic rate
                    (BMR) in obese adults, studies show that through proper diet over the span of 6 months in obese adults
                    has shown a positive correlation in fitness and mood, as well as a weight loss average of over 27.5%[1]
                    Studies also show reduced level of hunger and several other symptoms, such as inability to get up in the
                    morning and frequent anxiety.[2]
                </p>

                <strong class="col-md-12">Weight loss and Muscle Definition
                </strong>
                <p class="col-md-12">General fitness training may be used to promote weight loss. Personal trainers
                    construct a program centered on restructuring lifestyle while helping to provide the necessary
                    motivation for its success.

                    General fitness training can also be used to promote toning or building of muscles, which are
                    essentially the same physiological process. (However, 'toning' implies moderate muscle definition,
                    whereas 'building' implies increasing musculature significantly.)

                    The definition of weight loss is losing as much as or more than 3% body weight,[4] although there is no
                    completely defined definition as to what weight loss is, as one must take into account expert opinion,
                    body type, previous study precedents, and normal weight fluctuations.[4]</p>

                <p class="col-md-12">Physical fitness and mental stability go hand in hand, as research suggests that
                    although physical and aerobic activity betters ones physical capabilities, it also helps with ones
                    positive body image and self esteem. Studies show that physical fitness helps improve positive body
                    image and self esteem, perceivable increased stress management, reduction of depression and anxiety,[3]
                    as well as enhance mood states and improve overall cognitive function.[1] This all further shows the
                    importance behind the usage of physical fitness for mental stability and why it is so important to
                    engage in the practice of it.</p>
            </div>


            <div class="link-info bottom end-alignment mt-4"><a class="btn btn-info"
                    href="https://en.wikipedia.org/wiki/General_fitness_training" target="_blank">More Info about
                    Basic Fitness
                    (Wikipedia)</a>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

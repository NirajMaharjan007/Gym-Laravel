@extends('layouts.main')
@section('title', 'Body Building')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
@endsection
@section('body')
    @include('layouts.nav')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <h1 class="col-6">Body Building Course</h1>
                <div class="col-6 end-alignment">
                    <a href="{{ route('landing-page') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
            <div class="line"></div>
            <div class="row">
                <p class="col-12">
                    Bodybuilding is the use of progressive resistance exercise to control and develop one's muscles (muscle
                    building) by muscle hypertrophy for aesthetic purposes.[1] It is distinct from similar activities such
                    as powerlifting because it focuses on physical appearance instead of strength.[2] An individual who
                    engages in this activity is referred to as a bodybuilder. In professional bodybuilding, competitors
                    appear in lineups and perform specified poses (and later individual posing routines) for a panel of
                    judges who rank them based on symmetry, muscularity, size, conditioning, posing, and stage presentation.
                    Bodybuilders prepare for competitions through the elimination of nonessential body fat, enhanced at the
                    last stage by a combination of extracellular dehydration and carbo-loading, to achieve maximum muscular
                    definition and vascularity; they also tan and shave to accentuate the contrast of their skin under the
                    spotlights.[3]
                </p>

                <p class="col-md-12">
                    You may feel increased mental and physical energy, a boost in alertness and enthusiasm, and fewer
                    negative feelings after getting into a routine of practicing yoga.
                </p>
            </div>

            <h4>History</h4>
            <div class="line"></div>
            <div class="row">
                <strong class="col-md-12">Early history</strong>
                <p class="col-md-12">
                    Stone-lifting traditions were practiced in ancient Egypt, Greece, and Tamilakam.[6] Western
                    weightlifting developed in Europe from 1880 to 1953, with strongmen displaying feats of strength for the
                    public and challenging each other. The focus was not on their physique, and they possessed relatively
                    large bellies and fatty limbs compared to bodybuilders of today.[7]
                    Eugen Sandow.
                </p>

                <strong class="col-md-12">1950s–1960s</strong>
                <p class="col-md-12">Bodybuilding became more popular in the 1950s and 1960s with the emergence of
                    strength and gymnastics champions, and the simultaneous popularization of bodybuilding magazines,
                    training principles, nutrition for bulking up and cutting down, the use of protein and other food
                    supplements, and the opportunity to enter physique contests. The number of bodybuilding organizations
                    grew, and most notably the International Federation of Bodybuilders (IFBB) was founded in 1946 by
                    Canadian brothers Joe and Ben Weider. Other bodybuilding organizations included the Amateur Athletic
                    Union (AAU), National Amateur Bodybuilding Association (NABBA), and the World Bodybuilding Guild (WBBG).
                    Consequently, the contests grew both in number and in size. Besides the many "Mr. XXX" (insert town,
                    city, state, or region) championships, the most prestigious titles[according to whom?] were Mr. America,
                    Mr. World, Mr. Universe, Mr. Galaxy, and ultimately Mr. Olympia, which was started in 1965 by the IFBB
                    and is now considered the most important bodybuilding competition in the world.[1]</p>

                <p class="col-md-12">
                    During the 1950s, the most successful and most famous competing bodybuilders were Bill Pearl, Reg Park,
                    Leroy Colbert, and Clarence Ross.[15] Certain bodybuilders rose to fame thanks to the relatively new
                    medium of television, as well as cinema. The most notable were Jack LaLanne, Steve Reeves, Reg Park, and
                    Mickey Hargitay.[16] While there were well-known gyms throughout the country during the 1950s (such as
                    Vince's Gym in North Hollywood, California and Vic Tanny's chain gyms), there were still segments of the
                    United States that had no "hardcore" bodybuilding gyms until the advent of Gold's Gym in the mid-1960s.
                    Finally, the famed Muscle Beach in Santa Monica continued its popularity as the place to be for
                    witnessing acrobatic acts, feats of strength, and the like. The movement grew more in the 1960s with
                    increased TV and movie exposure, as bodybuilders were typecast in popular shows and movies.[6]
                </p>
            </div>


            <div class="link-info bottom end-alignment mt-4"><a class="btn btn-info"
                    href="https://en.wikipedia.org/wiki/Bodybuilding" target="_blank">More Info about Bodybuilding
                    (Wikipedia)</a>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

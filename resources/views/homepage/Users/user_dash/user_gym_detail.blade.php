@extends('layouts.main')
@section('title', 'gym detail')
@section('assets')
    <!-- Our Custom CSS -->
    <link href="{{ asset('css/dash.css') }}" rel="stylesheet">
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "256px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script src="{{ asset('js/dashbroadScript.js') }}"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@endsection
@section('body')
    @include('layouts.user_sidebar')
    <div class="contents">
        <div class="container-fluid row">
            <div class="col-lg-12">
                <h4><i>{{ Auth::user()->name }}'s</i> Gym details</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae provident, fuga illum expedita
                    possimus labore alias similique facere eius cam, fugiat nihil porro nisi sequi rem enim ducimus </p>
                <p>
                    totam atque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam consequatur et
                    perferendis neque fugit dicta magnam atque, quam vero, doloribus provident nemo incidunt voluptas
                    sunt inventore, corrupti natus pariatur culpa.
                </p>
            </div>
        </div>

        <div class="container-fluid row">
            <div class="col-md-5">
                <div class="container">
                    <h4>Attendent</h4>
                    <div class="line"></div>
                    <div id="chart_wrap">
                        <div id="chart_div">
                            <div id="piechart"></div>
                            <script src="{{ asset('js/piechart.js') }}"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container">
                    <h4>Most Used Tool</h4>
                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima doloremque esse sint quas,
                        quibusdam impedit eligendi mollitia quisquam assumenda. Sunt neque consequuntur architecto,
                        dolores vitae magnam recusandae laboriosam asperiores ullam?</p>
                    <table class="table-border table">
                        <tr>
                            <th>Tool</th>
                            <th>Most Used Cout</th>
                        </tr>
                        <tr>
                            <td>Treadmill</td>
                            <td>4 Times</td>
                        </tr>
                        <tr>
                            <td>Rowing Machines</td>
                            <td>2 Times</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container">
                    <h4>Your Classes</h4>
                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima doloremque esse sint quas,
                        quibusdam impedit eligendi mollitia quisquam assumenda. Sunt neque consequuntur architecto,
                        dolores vitae magnam recusandae laboriosam asperiores ullam?</p>
                    @if (Auth::user()->classes == false)
                        <p><i>No classes are founded.</i></p>
                    @else
                        <table class="table">
                            <tr>
                                <th>Class</th>
                                <th>Coach</th>
                            </tr>
                            @foreach ($classes as $class)
                                <tr>
                                    <td>{{ $class->class_name }}</td>
                                    <td>{{ $class->coach }}</td>
                                </tr>
                            @endforeach

                        </table>
                    @endif

                </div>
            </div>
        </div>

    </div>
@endsection

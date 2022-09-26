@extends('layouts.main')
@section('title', 'user dashboard')
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

    <script type="text/javascript" src="{{ asset('js/dashbroadScript.js') }}"></script>

@endsection

@section('body')
    @include('layouts.user_sidebar')

    <div class="contents">
        <div class="center-alignment">
            <h1>
                <u>Welcome to dashboard!</u>
            </h1>
        </div>

        <div class="container">
            <div class="container-fluid">
                <h3>Summary</h3>
                <div class="line"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="border p-2">
                            <h4><u> Work out </u></h4>
                            <p>
                                X-axis = Working <br />
                                Y-axis = Performances
                            </p>
                            <canvas id="myChart" class="chart"></canvas>
                            <script src="{{ asset('js/chartScript.js') }}"></script>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border p-2">
                            <h4><u>Output</u></h4>
                            <p>
                                X-axis = Months<br />
                                Y-axis = Working minutes
                            </p>
                            <canvas id="BarChart" class="chart"></canvas>

                            <script src="{{ asset('js/barchart.js') }}"></script>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

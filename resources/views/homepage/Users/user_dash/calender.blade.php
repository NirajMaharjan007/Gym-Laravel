@extends('layouts.main')
@section('title', 'user\'s calender')
@section('assets')
    <link href="{{ asset('css/dash.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "256px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

@endsection
@section('body')
    @include('layouts.user_sidebar')
    <div class="contents">
        <div class="container-fluid row">
            <div class="container-calendar col-md-6">
                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                            <h1></h1>
                            <p></p>
                        </div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days"></div>
                </div>
                <script src="{{ asset('js/custom_calender.js') }}"></script>
            </div>

            <div class="col-md-6 col-6">
                <div class="container">
                    <h3><u>All Events</u></h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis laudantium nulla inventore eligendi
                        corporis nobis cupiditate hic laborum, consequatur laboriosam quasi quos dolor ipsum ad qui ea!
                        Minus,
                        esse laudantium.
                    </p>
                    <table class="table-hover table" cellspacing="0">
                        <tr>
                            <th>Date</th>
                            <th>Events</th>
                        </tr>
                        <tr>
                            <td>June 6</td>
                            <td>Events</td>
                        </tr>
                        <tr>
                            <td>June 8</td>
                            <td>Events</td>
                        </tr>
                        <tr>
                            <td>June 9</td>
                            <td>Events</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

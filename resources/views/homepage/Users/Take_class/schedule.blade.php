@extends('layouts.main')
@section('title', 'schedule')
@section('body')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="container">
            <h4><u>{{ $training }} Training Class</u></h4>
            <p>Name: {{ Auth::user()->name }}</p>
            @if (strtolower($training) == 'zumba')
                <p>Time: 10:00AM - 11:30AM, Thursday and<br>
                    2:00PM - 3:30PM Wednesday
                </p>
                <p>Coach: Bret D. Bowers</p>
                @php
                    $coach = 'Bret D. Bowers';
                @endphp
            @elseif (strtolower($training) == 'yoga')
                <p>Time: 10:00AM - 11:30AM, Wednesday and
                    <br> 2:00pm-3:30pm Friday
                </p>
                @php
                    $coach = 'Hector T. Daigle';
                @endphp
                <p>Coach: Hector T. Daigle</p>
            @elseif (strtolower($training) == 'basic muscle')
                <p>Time:2:00pm-3:30pm Thursday and
                    <br> 10:00AM - 11:30AM, Friday
                </p>
                @php
                    $coach = 'Paul D. Newman';
                @endphp
                <p>Coach: Paul D. Newman</p>
            @elseif (strtolower($training) == 'basic fitness')
                <p>Time: 10:00AM - 11:30AM, Monday and
                    <br>2:00pm-3:30pm Tuesday
                </p>
                @php
                    $coach = 'Paul D. Newman';
                @endphp
                <p>Coach: Paul D. Newman</p>
            @endif

            <div class="form-group">
                <div class="end-alignment">
                    <form action="{{ route('class.set') }}" method="post" caption="Set">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                        <input type="hidden" value="{{ Auth::user()->price->id }}" name="price_id">
                        <input type="hidden" value="{{ $training }}" name="class_name">
                        <input type="hidden" value="{{ $coach }}" name="coach">
                        <input type="submit" value="Save" class="btn btn-success"
                            onclick="alert('Your class has been saved successfully')">
                        <a href="{{ route('the_classes') }}" class="btn btn-danger">Back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

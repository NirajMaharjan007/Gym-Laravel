@extends('layouts.main')
@section('title', 'Confirm Price')
@section('assets')

@endsection
@section('body')
    <div class="container">
        <div class="container-fuild p-4">
            <div>
                <h2>Are you sure you want to confirm the price</h2>
                <h5>Disclaimer</h5>
                <p>"No claims, representations or warranties, whether express or implied, are made by both our
                    companies
                    as to the safety, reliability, durability and performance of any of our companies' products.
                    Furthermore, our company accepts no liability whatsoever for the safety, reliability, durability
                    and
                    performance of any of our companies' products."
                </p>
            </div>

            <div>
                <strong><u>Details:</u></strong>
                <p>
                    Name: {{ Auth::user()->name }} <br>
                    Price: Rs {{ $price }} /- for {{ $date }} Month
                </p>
            </div>

            <div class="end-alignment pt-2">

                @if (Auth::user()->price == false)
                    <form method="post" action="{{ route('set.price') }}" caption="Sets">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="month" value="{{ $date }}">
                        <input type="hidden" name="price" value="{{ $price }}">
                        <input type="submit" value="Save" class="btn btn-success"
                            onclick="alert('The plan has been successfully saved')">
                        <a href="{{ route('pricing') }}" class="btn btn-danger">
                            Back
                        </a>
                    </form>
                @else
                    <form method="post" action="{{ route('update.price') }}" caption="Update">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="id" value="{{ Auth::user()->price->id }}">
                        <input type="hidden" name="month" value="{{ $date }}">
                        <input type="hidden" name="price" value="{{ $price }}">
                        <input type="submit" value="Save" class="btn btn-success" onclick="alert('Updated the Plan')">
                        <a href="{{ route('pricing') }}" class="btn btn-danger">
                            Back
                        </a>
                    </form>
                @endif

            </div>
        </div>
    </div>
@endsection

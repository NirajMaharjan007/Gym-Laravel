@extends('layouts.main')
@section('title', 'registration')

@section('body')
    <div class="wrapper linear-background">

        <div class="registration_form">
            <!-- Title -->
            <div class="title">
                Registration Form
            </div>

            <!-- Form -->
            <form action="{{ route('reg.store') }}" method="post">
                @csrf
                <input type="hidden" name="created_at">

                <div class="form_wrap">
                    <div class="input_wrap">
                        <label>Name</label>
                        <input type="text" name="name" required>
                    </div>


                    <!-- Email Id input Place -->
                    <div class="input_wrap">
                        <label>Email Address</label>
                        <input type="email" name="email" required>
                    </div>

                    <div class="input_wrap">
                        {{-- <div>
                            <label>Password</label>
                            <input type="password" name="password" id="myInput" required>
                        </div> --}}

                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Password</label><input type="password"
                                    class="form-control" name="password" id="password" required>
                            </div>
                            <div class="col-md-6"><label class="labels">Confirm password</label><input
                                    id="confirm_password" class="form-control" type="password"></div>
                            <script type="text/javascript" src="{{ asset('js/confirmpass.js') }}"></script>
                        </div>
                    </div>

                    <!-- Gender Select box -->
                    <span class="center-alignment mt-4"><label>Gender</label></span>
                    <div class="input_wrap">
                        <ul>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="gender" value="male" class="input_radio">
                                    <span>Male</span>
                                </label>
                            </li>

                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="gender" value="female" class="input_radio">
                                    <span>Female</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- Submit button -->
                    <div class="input_wrap mt-4">
                        <input type="submit" value="Register Now" class="submit_btn">
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

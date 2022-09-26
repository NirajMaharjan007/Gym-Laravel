@extends('layouts.main')
@section('title', 'change Name')
@section('body')
    @include('layouts.nav')
    <div class="container mt-5 mb-5 rounded bg-white">
        <form action="{{ route('edit.change', ['info' => Auth::user()->id]) }}" method="post">
            @csrf
            <input type="hidden" name="updated_at">
            <input type="hidden" value="{{ Auth::user()->id }}" name="id">
            <div class="row center-alignment">
                <div class="col-md-8 border-right border-left">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="text-right">Update Name</h4>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3"><label class="labels">Name</label><input type="text"
                                    class="form-control" name="name" value="{{ Auth::user()->name }}"></div>
                            <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="email"
                                    class="form-control" name="email" value="{{ Auth::user()->email }}"></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12 mt-3"><label class="mr-2">Gender :</label><input type="radio"
                                    class="ml-2 mr-2" name="gender" value="male" required>Male <input type="radio"
                                    name="gender" value="female" class="ml-4 mr-2" required>Female
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Password</label><input type="password"
                                    class="form-control" name="password" id="password" required>
                            </div>
                            <div class="col-md-6"><label class="labels">Confirm password</label><input
                                    id="confirm_password" class="form-control" type="password"></div>
                            <script type="text/javascript" src="{{ asset('js/confirmpass.js') }}"></script>
                        </div>
                        <div class="mt-5 text-center">
                            <input class="btn btn-success" type="submit" value="Save Profile">
                            <a href="{{ route('update.profile', ['info' => Auth::user()->id]) }}" class="btn btn-danger"
                                role="button">back</a>
                        </div>

                    </div>
                </div>
        </form>
    </div>
@endsection

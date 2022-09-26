@yield('personalforms')
<div class="container mt-5 mb-5 rounded bg-white">
    <form action="{{ route('update.change', ['info' => Auth::user()->id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf

        <div class="row">
            <input type="hidden" name="id" value="{{ Auth::user()->personal->id }}">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center p-3 py-5 text-center">
                    @if (Auth::user()->personal == true)
                        <img class="mt-5 mb-5" src="{{ url('uploads/' . Auth::user()->personal->picture) }} "
                            height="200px" width="200px">
                    @else
                        <img class="mt-5" src="{{ asset('img/default.png') }}" height="256px" width="256px">
                    @endif
                    <input type="file" class="mt-3" name="picture"
                        value="{{ Auth::user()->personal->picture }}">
                </div>
            </div>

            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="text-right">(update) Profile Settings</h4>
                        <div class="end-alignment">
                            <span>
                                <a href="{{ route('change.name', ['info' => Auth::user()->id]) }}"
                                    class="btn btn-info">Update Name</a>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3"><label class="labels">Phone number</label>
                            <input type="text" class="form-control" name="phone"
                                value="{{ Auth::user()->personal->phone }}">
                        </div>
                        <div class="col-md-12 mt-3"><label class="labels">Date of Birth</label>
                            <input type="text" class="form-control" placeholder="enter birth date" name="dob"
                                value="{{ Auth::user()->personal->dob }}">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">What do you do:</label><input
                                type="text" class="form-control" name="type"
                                value="{{ Auth::user()->personal->type }}"></div>
                        <div class="col-md-6 mt-2"><label class="labels">Address</label><input type="text"
                                class="form-control" placeholder="address" name="address"
                                value="{{ Auth::user()->personal->address }}"></div>
                        <div class="col-md-6 mt-2"><label class="labels">Residence</label><input type="text"
                                class="form-control" name="residence" placeholder="residence"
                                value="{{ Auth::user()->personal->residence }}"></div>
                    </div>
                    <div class="mt-5 text-center">
                        <input class="btn btn-success" type="submit" value="Save Profile">
                        <a href="{{ route('user.profile') }}" class="btn btn-danger" role="button">back</a>
                    </div>

                </div>
            </div>
    </form>
</div>

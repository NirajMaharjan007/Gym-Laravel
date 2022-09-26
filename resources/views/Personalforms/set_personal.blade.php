@yield('setform')
<div class="container mt-5 mb-5 rounded bg-white">
    <form action="{{ route('edit.profile', ['info' => Auth::user()->id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center p-3 py-5 text-center">
                    <img class="rounded-circle mt-5" src="{{ asset('img/default.png') }}" height="256px" width="256px">
                    <input type="file" class="mt-3" name="picture" required>
                </div>
            </div>

            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="text-right">(set) Profile Settings</h4>
                        <div class="end-alignment">
                            <span>
                                <a href="{{ route('change.name', ['info' => Auth::user()->id]) }}"
                                    class="btn btn-info">Update Name</a>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3"><label class="labels">Phone number</label>
                            <input required type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-md-12 mt-3"><label class="labels">Date of Birth</label><input required
                                type="text" class="form-control" placeholder="enter birth date" name="dob"></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">What do you do:</label><input required
                                type="text" class="form-control" name="type"></div>
                        <div class="col-md-6 mt-2"><label class="labels">Address</label><input required
                                type="text" class="form-control" placeholder="address" name="address"></div>
                        <div class="col-md-6 mt-2"><label class="labels">Residence</label><input required
                                type="text" class="form-control" name="residence" placeholder="residence"></div>
                    </div>
                    <div class="mt-5 text-center">
                        <input class="btn btn-success" type="submit" value="Save Profile">
                        <a href="{{ route('user.profile') }}" class="btn btn-danger" role="button">back</a>
                    </div>

                </div>
            </div>
    </form>
</div>

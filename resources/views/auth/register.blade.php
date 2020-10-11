@section('title') Registration Form @endSection
<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Register
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-body py-5">
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="name" class="form-control" :value="old('name')" required autofocus autocomplete="name">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" name="email" class="form-control" name="email" :value="old('email')" required >
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="password" required autocomplete="new-password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
                            </div>
                        </div>

                        <div class="card-footer">
                            <div>
                                <button type="submit" class="btn btn-success btn-block">Create Account</button>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div >
                                    <a  href="{{route('index')}}">Back</a>
                                </div>
                                <div>
                                    <a href="{{ route('login') }}">Login</a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

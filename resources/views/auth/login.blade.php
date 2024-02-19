@include('partials.header')
@include('partials.nav')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card @if ($errors->has('login_fail')) border-danger @endif">
                <div class="card-header @if ($errors->has('login_fail')) border-danger @endif">
                    Sign Up
                </div>
                <div class="card-body">
                    <form action="{{ route('login.submit') }}" method="POST" autocomplete="off">
                        @csrf

                        @if (session('email'))
                            <div class="mb-4 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ session('email') }}" name="email">
                                </div>
                            </div>
                        @else
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" autocomplete="new-email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endif




                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        @if ($errors->has('login_fail'))
                            <center>
                                <div class="mt-5">
                                    <h5 class="text-danger">Invalid email or password</h5>
                                </div>
                            </center>
                        @endif



                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </div>
</div>


@include('partials.footer')

@include('partials.header')
@include('partials.nav')
<div class="container mt-5">
    <h1>Register</h1>
</div>

<div class="container p-3 bg-light-subtle rounded mt-4">
    <form class="row g-3" method="POST" action="{{ route('register.submit') }}">
        @csrf

        {{-- Email --}}
        <div class="col-md-4">
            <label for="validationServer05" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid    @enderror" id="validationServer05"
                name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        {{-- Password --}}
        <div class="col-md-4">
            <label for="validationServer06" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="validationServer06"
                name="password" >
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password Confirmation --}}
        <div class="col-md-4">
            <label for="validationServer07" class="form-label">Confirm Password</label>
            <input type="password" class="form-control"  @error('password') is-invalid @enderror id="validationServer07" name="password_confirmation">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>




        {{-- First Name --}}
        <div class="col-md-3">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" class="form-control @error('first_name') is-invalid     @enderror"
                id="validationServer01" name="first_name" value="{{ old('first_name') }}">
            @error('first_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        {{-- Last Name --}}
        <div class="col-md-3">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" class="form-control @error('last_name') is-invalid    @enderror"
                id="validationServer02" name="last_name" value="{{ old('last_name') }}">
            @error('last_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        {{-- Age --}}
        <div class="col-md-3">
            <label for="validationServer03" class="form-label">Age</label>
            <input type="number" class="form-control @error('age') is-invalid @enderror" id="validationServer03"
                name="age" value="{{ old('age') }}">
            @error('age')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Gender --}}
        <div class="col-md-3">
            <label for="validationServer04" class="form-label">Gender</label>
            <select class="form-select @error('gender') is-invalid @enderror" id="validationServer04" name="gender">
                <option selected disabled value="">Choose...</option>
                <option value="Male" @if (old('gender') == 'Male') selected @endif>Male</option>
                <option value="Female" @if (old('gender') == 'Female') selected @endif>Female</option>
            </select>
            @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>



        <div class="col-12 mt-5">
            <button class="btn btn-dark  ps-5 px-5" type="submit">Submit</button>
            <button class="btn btn-danger ms-1" type="reset">Reset</button>
        </div>
    </form>
</div>



@include('partials.footer')

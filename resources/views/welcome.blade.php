@include('partials.header')
@include('partials.nav')

<div class="p-5 mb-4 bg-body-tertiary rounded-3 m-5">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Advanced Secured Authentication</h1>
        <p class="col-md-8 fs-4">Our project is dedicated to crafting a robust and secure authentication system, coupled
            with meticulous validation measures, ensuring the utmost security for user login and registration processes.
            Backed by an advanced professional admin dashboard, our solution promises a seamless and fortified user
            experience.</p>
        <div>
            <a href="\login" class="btn btn-dark" role="button" >Login</a>
            <a href="\register" class="btn btn-dark" role="button" >Register</a>
        </div>
    </div>
</div>

@include('partials.footer')

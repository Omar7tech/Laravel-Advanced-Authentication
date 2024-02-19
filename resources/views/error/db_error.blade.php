@include('partials.header')
@include('partials.nav')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center text-danger mb-4">Error</h1>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oops!</strong> There was an error. Please try again later.
                    </div>
                    <p class="card-text text-muted text-center">If the problem persists, please contact support for
                        assistance.</p>
                    <div class="text-center">
                        <a href="/" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

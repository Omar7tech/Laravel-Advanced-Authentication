@include('partials.header')
@include('partials.nav')
<div class="container mt-3">
    <h3 class="flex">Hello , {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
    <p class="me-2">{{ Auth::user()->email }}</p>
</div>
@include('partials.footer')

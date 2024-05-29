@include('partials/header')
@include('partials/sidebar')
@include('partials/navbar')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            @yield('main_content')
        </div>
        <!-- Page end  -->
    </div>
</div>
@include('partials/footer')
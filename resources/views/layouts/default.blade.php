<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="{{ Request::is('/') ? 'home' : '' }}">
@if (Request::is('/'))
<!-- Loader -->
<div id="loader-wrapper">
    <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1">
            <div class="loader-circle-2"></div>
        </div>
        <div class="needle"></div>
        <div class="loading">Loading</div>
    </div>
</div>
<!-- //Loader -->
@endif
<!-- Header -->
<header class="page-header">
    @include('includes.header')
</header>
<!-- // Header -->
    @yield('content')
<!-- Appointment Form -->
    @yield('modal')
<!-- //Appointment Form -->
@include('includes.footer')
</body>
</html>
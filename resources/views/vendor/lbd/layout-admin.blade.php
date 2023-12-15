<!DOCTYPE html>
@include('lbd::inc.demo')
<html lang="en">
<head>
    @include('lbd::inc.head')
</head>
<body>
<div class="wrapper">
{{--    @include('lbd::inc.sidebar-admin')--}}

    <div class="main-panel">
{{--        @include('lbd::inc.navbar-admin')--}}

        <div class="content">
            @yield('content')
        </div>

{{--        @include('lbd::inc.footer')--}}
    </div>
</div>
@stack('demo')
</body>
@include('lbd::inc.scripts')
</html>

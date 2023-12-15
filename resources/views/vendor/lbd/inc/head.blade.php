<meta charset="utf-8">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vendor/lbd/img/apple-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('vendor/lbd/img/favicon.png') }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>
@livewireStyles
<!-- Title -->
<title>@yield('title') | {{ config('app.name') }}</title>

@section('styles')
<!-- Fonts and icons -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS Files -->
<link href="{{ asset('vendor/lbd/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/lbd/css/light-bootstrap-dashboard.css') }}?v=2.0.1" rel="stylesheet">
{{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/bootstrap-table.min.css">--}}
{{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.8.1/extensions/filter-control/bootstrap-table-filter-control.min.css">--}}


@stack('styles')

@show

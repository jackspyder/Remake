<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'REMADE') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/sidebar.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

  @include('includes.header')

<div id="wrapper">
    <!-- Sidebar -->
    @include('includes.sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper" class="container">
      @yield('content')
    </div>

</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>

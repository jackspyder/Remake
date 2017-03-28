<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
@include('includes.sidebar')

<div class="container">
    <header class="main-header">
        @include('includes.header')
    </header>

    <div id="wrapper">
        <div id="page-content-wrapper" class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/mixed.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
    {{--<script src="/js/charts.js"></script>--}}
    {{--<script src="/js/autocomplete.js"></script>--}}

</div>
</body>
</html>

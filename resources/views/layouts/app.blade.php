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
    <script src="/js/app.js"></script>

</div>
</body>
</html>

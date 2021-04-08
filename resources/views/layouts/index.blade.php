<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Haswell - Responsive HTML5 Template">
    <meta name="author" content="ABCgomel">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @include('includes.style')

</head>

<body>

    <!-- LOADER -->
    <div id="loader-overflow">
        <div id="loader3">Please enable JS</div>
    </div>

    <div id="wrap" class="boxed ">
        <div class="grey-bg">

            @include('includes.header')

            @yield('content')

            @include('includes.footer')
            <!-- BACK TO TOP -->
            <p id="back-top">
                <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
            </p>
        </div><!-- End BG -->
    </div><!-- End wrap -->

    @include('includes.script')

</body>

</html>

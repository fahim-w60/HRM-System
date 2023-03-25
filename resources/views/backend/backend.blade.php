<!DOCTYPE html>
<html lang="en">
<head>

@include('backend.partials._header_scripts')

</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    @include('backend.partials._loader')
    <!--  END LOADER -->


    <!--  BEGIN NAVBAR  -->
   @include('backend.partials._navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('backend.partials._sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @include('backend.partials._content_header')

            @yield('content')

            @include('backend.partials._footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('backend.partials._footer_scripts')

</body>
</html>

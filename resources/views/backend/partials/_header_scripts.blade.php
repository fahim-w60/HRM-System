<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<link rel="icon" type="image/x-icon" href="{{asset('src/assets/img/favicon.ico')}}"/>
<link href="{{ asset('layouts/vertical-dark-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('layouts/vertical-dark-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('layouts/vertical-dark-menu/loader.js') }}"></script>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('layouts/vertical-dark-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('layouts/vertical-dark-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{ asset('src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

@yield('page_level_css_plugins')

@yield('page_level_css_files')

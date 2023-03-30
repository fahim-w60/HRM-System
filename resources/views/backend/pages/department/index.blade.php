@extends('backend.backend')

@section('title')
{{ $commons['page_title'] }}
@endsection

@section('content_header')
{{ $commons['content_title'] }}
@endsection

@section('content')
    @include('backend.pages.department._table')
@endsection

@section('page_level_css_plugins')
<link href="{{  asset('src/plugins/src/animate/animate.css') }}" rel="stylesheet" type="text/css" />
<link href="{{  asset('src/assets/css/light/components/carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{  asset('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
<link href="{{  asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="{{ asset('src/plugins/src/sweetalerts2/sweetalerts2.css')}}">

<link href="{{  asset('src/assets/css/light/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{  asset('src/plugins/css/light/sweetalerts2/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />

<link href="{{  asset('src/assets/css/dark/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{  asset('src/plugins/css/dark/sweetalerts2/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('page_level_js_plugins')
<script src="{{  asset('src/assets/js/scrollspyNav.js')}}"></script>
<script src="{{  asset('src/plugins/src/sweetalerts2/sweetalerts2.min.js')}}"></script>
<script src="{{  asset('src/plugins/src/sweetalerts2/custom-sweetalert.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.badge-light-danger.text-start.action-delete').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You can able to revert this Department!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        })
        .then((willDelete) => {
        if (willDelete) {
            Swal.fire(
            'Deleted!',
            'Department has been deleted Successfully.',
            'success'
            )
            form.submit();
        }
        });
    });
</script>
@endsection

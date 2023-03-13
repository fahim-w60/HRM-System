@extends('backend.backend')

@section('title')
{{ $commons['page_title'] }}
@endsection

@section('content_header')
{{  $commons['content_title'] }}
@endsection
<style>
    .dataTables_info,
    .paginate_button.page-item,{
        display: none !important;
    }
    button.dt-button.dt-delete.btn.btn-danger {
    display: none !important;
}
</style>
@section('content')
@include('backend.pages.employee._table')
@endsection

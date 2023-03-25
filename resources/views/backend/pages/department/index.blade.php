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

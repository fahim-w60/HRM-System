@extends('backend.backend')

@section('title')
{{ $commons['page_title'] }}
@endsection

@section('content_header')
{{  $commons['content_title'] }}
@endsection

@section('content')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="layout-top-spacing layout-spacing">
           
                <div class="row">
                    @foreach ($employees as $employee)  
                        <div class="col-md-3 mb-4">
                            <div class="card style-2 mb-md-0 mb-4">
                                @if($employee->profile_img)
                                    <img alt="avatar"  class="card-img-top  img-fluid" src="{{asset($employee->profile_img)}}">
                                @else
                                    <img alt="avatar"  class="card-img-top img-fluid" src="{{ asset('/upload/employee/profile/No_Image_Available.jpg') }}">
                                @endif 
                                <div class="card-body px-0 pb-0">
                                    <p><b>Name : {{ $employee->emp_name }}</b></p>
                                    <p><b>Email : {{ $employee->emp_email }}</b></p>
                                    <p><b>Phone : {{ $employee->emp_phone }}</b></p>
                                    <p><b>Address : {{ $employee->emp_address }}</b></p>
                                    <p><b>Designation : {{ $employee->designation }}</b></p>
                                    <p><b>Department : {{ $employee->name }}</b></p>
                                </div>

                                <div class="ms-auto my-3">                                  
                                    <form action="">
                                                                          
                                        <a href="" class="btn btn-primary btn-sm action-btn btn-edit bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                        </a>
                                        <a href="" class="btn btn-secondary btn-sm btn-view bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </a>
                                        <button href="" class="btn btn-danger btn-sm action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </button> 
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            
        </div>
    </div>
</div>
@endsection
@section('page_level_css_plugins')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
@endsection

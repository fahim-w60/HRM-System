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
        <form id="myForm" action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row mb-4 layout-spacing layout-top-spacing">
            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="widget-content widget-content-area blog-create-section" style="padding:20px;">  
                    <div class="row mb-4 form-group">
                        <div class="col-sm-12">
                            <label>Employee Name</label>
                            <input type="text" name="emp_name" class="form-control @if($errors->has('emp_name')) is-invalid @endif" placeholder="Employee Name">
                            @if($errors->has('emp_name'))
                                <span class="text-danger">Employee Name is required.</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4 form-group">
                        <div class="col-sm-12">
                            <label>Employee Email</label>
                            <input type="email" name="emp_email" class="form-control @if($errors->has('emp_email')) is-invalid @endif" placeholder="Employee Email">
                            @if($errors->has('emp_email'))
                                <span class="text-danger"> Employee Email is required. </span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4 form-group">
                        <div class="col-sm-12">
                            <label>Employee Designation</label>
                            <input type="text" name="designation" class="form-control @if($errors->has('designation')) is-invalid @endif" placeholder="Employee Designation">
                            @if($errors->has('designation'))
                                <span class="text-danger">Designation is required.</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="row mb-4 form-group">
                        <div class="col-sm-12">
                            <label>Employee Phone</label>
                            <input type="number" name="emp_phone" class="form-control" placeholder="+880">
                        </div>
                    </div>
                    
                    <div class="row mb-4 form-group">
                        <div class="col-sm-12">
                            <label>Address</label>
                            <input type="text" name="emp_address" class="form-control" placeholder="Address">
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                <div class="widget-content widget-content-area blog-create-section" style="padding:20px;">
                    <div class="row">
                        <div class="col-xxl-12 col-md-12 mb-4 form-group">
                            <label for="category">Department</label>
                            <select name="department_id"  class="form-control @if($errors->has('department_id')) is-invalid @endif" aria-label="Default select example" required="required">
                                @if($errors->has('department_id'))
                                    <span class="text-danger">Department is required.</span>
                                @endif
                                <option selected disabled><--Select Department--></option>
                                @foreach ($departments as $dept)
                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>        
                                @endforeach 
                            </select>
                        </div>
                        
                        <div class="col-xxl-12 col-md-12 mb-4 form-group">
                            <label>Salary</label>
                            <input name="salary" type="number" class="form-control @if($errors->has('salary')) is-invalid @endif" placeholder="Salary">
                            @if($errors->has('salary'))
                                <span class="text-danger">Salary is required.</span>
                            @endif
                        </div>

                        <div class="col-xxl-12 col-md-12">
                            <div class="form-group mb-4">
                                <label for="date">Join Date</label>
                                <input name="join_date" type="date" class="form-control @if($errors->has('join_date')) is-invalid @endif"  id="datepicker" placeholder="Add date picker">
                                @if($errors->has('join_date'))
                                    <span class="text-danger">Join Date is required.</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-xxl-12 col-md-12">

                            <label for="formFile" class="form-label">Profile Image</label>
                            <input type="file" name="profile_img" class="form-control mb-2" id="formFile" onChange="mainThamUrl(this)">
                            <img src="" style="margin:auto;display:block;" class="mb-2" id="mainThmb" />
                        </div>

                        <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                            <button type="submit" class="btn btn-success w-100">Add Employee</button>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>






@include('backend.pages.employee._table')
@endsection


@section('page_level_css_plugins')
    <link href="{{  asset('src/plugins/css/dark/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{  asset('src/assets/css/dark/apps/invoice-add.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('src/plugins/css/light/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{  asset('src/plugins/src/flatpickr/flatpickr.css" rel="stylesheet')}}" type="text/css">
    <link href="{{  asset('src/plugins/css/light/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{  asset('src/plugins/css/light/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/filepond/filepond.min.css')}}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/filepond/FilePondPluginImagePreview.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/src/tagify/tagify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/light/tagify/custom-tagify.css')}}">
    <link href="{{ asset('src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/dark/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/css/dark/tagify/custom-tagify.css') }}">
    <link href="{{ asset('src/plugins/css/dark/filepond/custom-filepond.css')}}" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" href="{{ asset('src/assets/css/light/apps/blog-create.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/css/dark/apps/blog-create.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
@endsection


@section('page_level_js_plugins')
    <script src="{{  asset('src/plugins/src/editors/quill/quill.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/tagify/tagify.min.js') }}"></script>
    <script src="{{ asset('src/assets/js/apps/blog-create.js') }}"></script>
    <script src="{{  asset('src/plugins/src/flatpickr/flatpickr.js')}}"></script>
    <script src="{{  asset('src/assets/js/apps/invoice-add.js')}}"></script>
    <script>
    $(function(){
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        var minDate= year + '-' + month + '-' + day;
        $('#datepicker').attr('max', minDate);
    });
    </script>
    <script type="text/javascript">
            function mainThamUrl(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#mainThmb').attr('src',e.target.result).width(120).height(120);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
    </script>
@endsection
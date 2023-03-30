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

                                <div class="my-3 mx-auto">
                                    <form action="{{ route('employee.destroy',$employee->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a class="badge badge-success text-start me-2 action-edit" href="{{ route('employee.edit',$employee->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                        </a>

                                        <a class="badge badge-secondary text-start me-2 action-edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </a>


                                        <button class="badge badge-danger text-start action-delete" style="border:none;"  type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
    {!! $employees->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
@endsection


@section('page_level_css_plugins')
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
    $('.badge-danger.text-start.action-delete').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You can able to revert this employee!",
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
            'Employee has been deleted Successfully.',
            'success'
            )
            form.submit();
        }
        });
    });
</script>
@endsection

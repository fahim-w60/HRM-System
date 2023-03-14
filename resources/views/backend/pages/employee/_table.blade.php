<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">
        <div class="row" id="cancel-row">
        
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing">
                <div class="widget-content widget-content-area br-8">
                    <table id="invoice-list" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th class="checkbox-column"> SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>phone</th>
                                <th>Image</th>
                                <th>Address</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $key => $employee)
                                <tr>
                                    <td> {{ $key+1 }} </td>
                                    <td>{{ $employee->emp_name }}</td>
                                    <td>{{ $employee->emp_email  }}</td>
                                    <td>{{ $employee->designation }}</td>
                                    <td>{{ $employee->emp_phone  }}</td>
                                    <td>
                                        @if($employee->profile_img)
                                            <img alt="avatar" style="height:60px;width:80px;" class="img-thumbnail img-fluid" src="{{asset($employee->profile_img)}}">
                                        @else
                                            <img alt="avatar" style="height:60px;width:80px;" class="img-thumbnail img-fluid" src="{{ asset('/upload/employee/profile/No_Image_Available.jpg') }}">
                                        @endif   
                                    </td>
                                    <td>
                                        <span class="inv-amount">{{ $employee->emp_address }}</span>
                                    </td>
                                    <td>
                                        @if($employee->name)
                                            {{ $employee->name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($employee->emp_status==1)
                                            <span class="badge badge-success" style="font-size:13px;">Active</span>
                                        @else
                                            <span class="badge badge-danger" style="font-size:13px;">Inactive</span>
                                        @endif
                                    </td>
                                    <td style="display: flex;">
                                        <a class="badge badge-light-primary text-start me-2 action-edit" style="margin-top:15px;" href="{{ route('employee.edit',$employee->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                        <form action="{{ route('employee.destroy',$employee->id) }}" style="margin-top: 15px; margin-left: -5px;" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('delete')
                                            <button class="badge badge-light-danger text-start action-delete" type="submit" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $employees->links() }}
                </div>
            </div>

        </div>

    </div>
    
</div>
<style>
    .dataTables_info,
    .paginate_button.page-item,{
        display: none !important;
    }
    button.dt-button.dt-delete.btn.btn-danger {
    display: none !important;
    }
    .dt-button.btn.btn-primary{
        display: none !important;
    }
</style>
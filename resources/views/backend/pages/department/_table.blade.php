<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="row" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing">
                <div class="col-md-12" style="margin-top:-10px;">
                    <a href="" data-bs-toggle="modal" data-bs-target="#dept_modal" class="btn btn-primary ms-auto d-table">Add New Department</a>
                        @if($errors->has('name'))
                            <div class="alert alert-danger my-3" role="alert">
                                Department Name Cant be null!!!!
                            </div>
                        @endif
                </div>
                <hr>
                <div class="widget-content widget-content-area br-8">
                    <table id="invoice-list" class="table dt-table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column"> SL</th>
                                <th>Department Name</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Deleted At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($departments as $key => $dept)
                            <tr>
                                <td class="checkbox-column">{{ $key+1 }}</td>
                                <td>{{ $dept->name }}</td>
                                <td>
                                    @php
                                    if(isset($dept->createdBy->name))
                                        echo  $dept->createdBy->name;
                                    else
                                        echo "NA";
                                    @endphp
                                </td>
                                <td>
                                    @php
                                    if(isset($dept->created_at))
                                        echo  $dept->created_at;
                                    else
                                        echo "NA";
                                    @endphp
                                </td>
                                <td>
                                    @php
                                    if(isset($dept->deleted_at))
                                        echo  $dept->deleted_at;
                                    else
                                        echo "NA";
                                    @endphp
                                </td>
                                <td>
                                    @if($dept->dept_status==1)
                                        <span class="badge badge-success" style="font-size:13px;">Active</span>
                                    @else
                                        <span class="badge badge-danger" style="font-size:13px;">Inactive</span>
                                    @endif
                                </td>
                                <td style="display: flex;">
                                    <a class="badge badge-light-primary text-start me-2 action-edit" style="margin-top:15px;margin-bottom: 11px;" data-bs-toggle="modal" data-bs-target="#dept_modal_{{$dept->id }}" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    <form action="{{ route('department.destroy',$dept->id) }}" style="margin-top: 15px; margin-left: -5px;" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button class="badge badge-light-danger text-start action-delete"  type="submit" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button>
                                    </form>
                                </td>
                            </tr>
                            <div id="dept_modal_{{ $dept->id }}" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Department</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('department.update',$dept->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('patch')
                                                <div class="row mb-4 form-group">
                                                    <div class="col-sm-12">
                                                        <label>Department Name</label>
                                                        <input type="text" name="name" value="{{ $dept->name }}" class="form-control mb-3" placeholder="Department Name">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label>Status</label><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" {{ $dept->dept_status == 1 ? 'checked' :
                                                            ''}} name="dept_status"  id="inlineRadio1" value="1">
                                                            <label class="form-check-label">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="dept_status" id="inlineRadio2" {{ $dept->dept_status == 0 ? 'checked' :
                                                            ''}} value="0">
                                                            <label class="form-check-label">Inactive</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                </div>
                                                    <div class="modal-footer md-button">
                                                        <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $departments->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>


<div id="dept_modal" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('department.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4 form-group">
                        <div class="col-sm-12">
                            <label>Department Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Department Name">

                        </div>
                    </div>

                    </div>
                        <div class="modal-footer md-button">
                            <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                </form>
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
    .paginate_button.page-item{
        display: none !important;
    }
    .dataTables_info{
        display: none !important;
    }
    .table-responsive{
        margin-bottom: -30px !important;
    }
    .small.text-muted{
        padding-left: 10px !important;
    }
</style>

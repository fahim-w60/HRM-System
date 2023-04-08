<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Http\Requests\DepartmentStoreRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use Carbon\Carbon;
use Auth;

class DepartmentController extends Controller
{
    public function index()
    {
        $commons['page_title']= 'HRM / Department';
        $commons['content_title']='Department / List';
        $commons['main_menu']='Employee';
        $commons['current_menu']='Employee Index';
        $departments = Department::where('dept_status',1)->with(['createdBy','updatedBy','deletedBy'])->latest()->paginate(10);
        return view('backend.pages.department.index',compact('commons','departments'));
    }
    public function store(DepartmentStoreRequest $request)
    {
        $data = new Department();
        $data->name =$request->validated('name');
        $data->created_at = Carbon::now();
        $data->created_by = Auth::User()->id;
        $data->save();
        $notification = array(
            'message' => 'Department Added Successfully !!!',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    public function destroy($id)
    {
        $data = Department::findOrFail($id);
        $data->dept_status = 0;
        $data->deleted_at = Carbon::now();
        $data->deleted_by = Auth::User()->id;
        $data->save();
        $notification = array(
            'message' => 'Department Deleted Successfully',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
    public function update(DepartmentUpdateRequest $request,$id)
    {
        $data = Department::findOrFail($id);
        $data->name = $request->name;
        $data->dept_status = $request->dept_status;
        $data->updated_at = Carbon::now();
        $data->updated_by = Auth::User()->id;
        $data->save();
        $notification = array(
            'message' => 'Department Updated Successfully',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}

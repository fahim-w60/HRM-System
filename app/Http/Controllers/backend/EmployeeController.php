<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Http\Requests\EmployeeStoreRequest;
use Illuminate\Support\Facades\Auth;


class EmployeeController extends Controller
{
    public function index()
    {
        $commons['page_title']= 'HRM / Employee';
        $commons['content_title']='Employee / List';
        $commons['main_menu']='Employee';
        $commons['current_menu']='Employee Index';

        $employees = Employee::latest()->paginate(20);

        return view('backend.pages.employee.index',compact('employees','commons'));

    }
    public function create()
    {
        $commons['page_title']= 'HRM / Employee';
        $commons['content_title']='Employee / Add';
        $commons['main_menu']='Employee';
        $commons['current_menu']='Employee Add';

        $employees = Employee::latest()->paginate(20);
        $departments = Department::all();

        return view('backend.pages.employee.create',compact('employees','commons','departments'));
    }
    public function store(EmployeeStoreRequest $request)
    {    
        
        $data = new Employee();
        $data->emp_name = $request->validated('emp_name');
        $data->emp_email = $request->validated('emp_email');
        $data->emp_phone = $request->emp_phone;
        $data->emp_address = $request->emp_address;
        $data->emp_status = 1;
        $data->designation = $request->designation;
        $data->department_id = $request->validated('department_id');
        $data->user_id = Auth::User()->id;
        if($request->has('profile_img'))
        {
            $image = $request->file('profile_img');
            $imageName = rand().'.'.time().'.'.date('Y-m-d').'.'.$image->getClientOriginalName();
            $directory = 'upload/employee/profile/';
            $image->move($directory,$imageName);
            $data->profile_img = $directory.$imageName; 
        }
        $data->save();
        $notification = array(
            'message' => 'Employee Added Successfully',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}

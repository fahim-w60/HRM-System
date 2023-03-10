<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Http\Requests\EmployeeStoreRequest;
use Illuminate\Support\Facades\Auth;
use DB;


class EmployeeController extends Controller
{
    public function index()
    {
        $commons['page_title']= 'HRM / Employee';
        $commons['content_title']='Employee / List';
        $commons['main_menu']='Employee';
        $commons['current_menu']='Employee Index';

        $employees = DB::table('employees')
        ->join('departments','employees.department_id','=','departments.id')
        ->select('employees.*','departments.name')
        ->latest()->paginate(20);
 

        return view('backend.pages.employee.index',compact('employees','commons'));

    }
    public function create()
    {
        $commons['page_title']= 'HRM / Employee';
        $commons['content_title']='Employee / Add';
        $commons['main_menu']='Employee';
        $commons['current_menu']='Employee Add';

        $employees = DB::table('employees')
        ->join('departments','employees.department_id','=','departments.id')
        ->select('employees.*','departments.name')
        ->latest()->paginate(20);

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
        $data->department_id = $request->department_id;
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
    public function edit($id)
    {
        $commons['page_title']= 'HRM / Employee';
        $commons['content_title']='Employee / Edit';
        $commons['main_menu']='Employee';
        $commons['current_menu']='Employee Edit';

        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        $employees = DB::table('employees')
        ->join('departments','employees.department_id','=','departments.id')
        ->select('employees.*','departments.name')
        ->latest()->paginate(20);
       

        return view('backend.pages.employee.edit',compact('employee','commons','departments','employees'));
    }
    public function update(EmployeeStoreRequest $request,$id)
    {
        $data = Employee::findOrFail($id);
        $data->emp_name = $request->validated('emp_name');
        $data->emp_email = $request->emp_email;
        $data->emp_phone = $request->emp_phone;
        $data->emp_address = $request->emp_address;
        $data->designation = $request->designation;
        $data->department_id = $request->department_id;
        $data->user_id = Auth::User()->id;
        if($request->has('profile_img'))
        {
            if($data->profile_img!=null)
            {
                unlink($data->profile_img);
            }
            $image = $request->file('profile_img');
            $imageName = rand().'.'.time().'.'.date('Y-m-d').'.'.$image->getClientOriginalName();
            $directory = 'upload/employee/profile/';
            $image->move($directory,$imageName);
            $data->profile_img = $directory.$imageName; 
        }
        $data->save();
        $notification = array(
            'message' => 'Employee Updated Successfully',
            'alert-type' => 'success',
        );
        return back()->with($notification);

    }
    public function destroy($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();
        $notification = array(
            'message' => 'Employee Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('employee.create')->with($notification);
    }
}

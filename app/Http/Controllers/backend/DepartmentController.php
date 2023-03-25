<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $commons['page_title']= 'HRM / Department';
        $commons['content_title']='Department / List';
        $commons['main_menu']='Employee';
        $commons['current_menu']='Employee Index';

        return view('backend.pages.department.index',compact('commons'));
    }
}

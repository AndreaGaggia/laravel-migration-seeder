<?php

namespace App\Http\Controllers;

use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $depts = Department::all();
        return view('departments.index', compact('depts'));
    }
}

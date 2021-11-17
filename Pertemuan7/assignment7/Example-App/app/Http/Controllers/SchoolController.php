<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    public function showList()
    {
       $departments = Department::all();
       $data = [
           'departments' => $departments
       ]; 
        return view('welcome', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Return all employees from DB (in JSON format)
    public function getData(){
        return Employee::all();
    }
}

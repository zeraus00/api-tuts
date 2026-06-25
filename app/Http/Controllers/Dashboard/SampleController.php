<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function getUsers()
    {
        $employees = Employee::all();
        return $employees;
    }
}

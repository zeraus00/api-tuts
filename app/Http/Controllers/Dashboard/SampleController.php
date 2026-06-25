<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function getUsers()
    {
        //$employees = Employee::all();
        //return $employees;

        $users = Employee::where('id', 1)
            -> get();

        if (count($users) > 0){
            return $users;
        }
        else
            {
                return "No record found.";
            }
        // $users = Employee::find(1); objoect or single data

        //checking if the it contains data using single data
        // $users = Employee::where('id', '=', 1)
        // -> first(); // single data

        // if ($users) {
        //     return $users;
        // }
        // else {
        //     return "No record Found.";
        // }
    }
}

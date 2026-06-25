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

        // $users = Employee::where('id', 1)
        //     -> get();

        // if (count($users) > 0){
        //     return $users;
        // }
        // else
        //     {
        //         return "No record found.";
        //     }
        // $users = Employee::find(1); objoect or single data

        //checking if the it contains data using single data
        $users = Employee::select('name')
            -> where('id', '=', 2)
            -> first(); // single data

        // can also use this:
        return $users ? $users: "No record Found.";

        // if ($users) {
        //     return $users;
        // }
        // else {
        //     return "No record Found.";
        // }
    }

    public function createUser()
    {
        $insert = Employee::create([
            'name' => 'Renalyn',
            'email' => 'Renalyntrndd@gmail.com',
            'password' => '12345',
        ]);

        return $insert ? "Success" : "Error";
    }
}

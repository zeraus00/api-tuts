<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
class UserController extends Controller
{
    public function getUsers()
    {
        // $users = Employee::all(); //get all users of Employee
        // return $users; // return the users
        $users = Employee::where('id', 1)
            -> get();

        // $users = Employee::find(1); objoect or single data
        // $users = Employee::where('id', '=', 1)
        // -> first();
        return $users;
    }
}

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
    //hardcoded code
    public function createUser()
    {
        //this is hard coded
        $insert = Employee::create([
            'name' => 'Renalyn',
            'email' => 'Renalyntrndd@gmail.com',
            'password' => '12345',
        ]);

        return $insert ? "Success" : "Error";
    }

    //creating user using request (front end to backend)
    public function createUsers(Request $request)
    {

        $email = $request -> email;
        $checker = Employee::where('email', $email)
        -> first();

        if($checker)
            {
                return "Already Registered!";
            }

        $insert = Employee::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => $request -> password,
        ]);

        return $insert ? "Success" : "Error";
    }
}

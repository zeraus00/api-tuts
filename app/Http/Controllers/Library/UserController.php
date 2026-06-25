<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
class UserController extends Controller
{
    public function getUsers()
    {
        $users = Employee::all();
        return $users;
    }
}

<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Client\Response as ClientResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeCrtl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $employees = Employee::all();

        return count($employees) > 0 ? response()->json($employees) : 'No records found.';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $email = $request->email;

        //check if someone already owns this email address
        $checker = Employee::where('email', $email)->first();

        if($checker) {
            return 'This email is already registered!';
        }

        $insert = Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
        ]);

        return $insert ? "Sucess" : "Error";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $employee = Employee::select('name')
        ->where('id', $id)
        ->first();

        return $employee ? response()->json($employee) : 'Employee not found';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //check if the employee's data exists
        $employee = Employee::find($id);

        if (!$employee) {
            return 'Employee not found.';
        }

        //if exists, update the data
        $update = $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
        ]);

        return $update ? response()->json([
            'message' => 'Successful',
            'updated Data' => $employee
        ]) : 'Error';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $employee = Employee::find($id);
        if(!$employee) {
            return 'Employee not found.';
        }

        $delete = $employee->delete();

        return $delete ? response()->json([
            'message' => 'Successful',
            'deleted data' => $employee
        ]) : 'Error deleting employee.';
    }
}

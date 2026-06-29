<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Models\Contractuals;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContractualCrtl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contractuals = Contractuals::select('*')
        ->where('id', '>', 1)
        ->get();
        return response() -> json($contractuals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AlquilerController;
use Illuminate\Http\Request;

class AlquilerControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alquiler_controllers = AlquilerController::all();

        return view('alquiler.index',compact('alquiler_controllers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(AlquilerController $alquilerController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlquilerController $alquilerController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlquilerController $alquilerController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlquilerController $alquilerController)
    {
        //
    }
}

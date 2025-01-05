<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetalletarimaRequest;
use App\Models\Detalletarima;
use Illuminate\Http\Request;

class DetalletarimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('detalletarimas.index');
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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Detalletarima $detalletarima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalletarima $detalletarima)
    {
        dd('prueba');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalletarima $detalletarima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalletarima $detalletarima)
    {
        //
    }
}

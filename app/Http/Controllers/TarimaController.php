<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarimaRequest;
use App\Models\Tarima;
use Illuminate\Http\Request;

class TarimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarimas = Tarima::all();
        return view('tarimas.index',compact('tarimas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarimas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarimaRequest $request)
    {
        $tarima = Tarima::create($request->all());
        return redirect()->route('tarimas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

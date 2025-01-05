<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcopioRequest;
use App\Models\Acopio;
use App\Models\Customer;
use Illuminate\Http\Request;

class AcopioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acopios = Acopio::all();
        return view('acopios.index', compact('acopios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('acopios.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcopioRequest $request)
    {
        // $acopio = new Acopio();
        // $acopio->customer_id = $request->customer_id;
        // $acopio->name = $request->name;
        // $acopio->phone = $request->phone;
        // $acopio->save();
        $Acopio = Acopio::create($request->all());
        return redirect()->route('acopios.index');

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

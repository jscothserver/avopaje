<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoxRequest;
use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boxes = Box::all();
        return view('cajas.index', compact('boxes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cajas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BoxRequest $request)
    {
        Box::create($request->all());
        return redirect()->route('cajas.index');
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
    public function getpeso(string $id)
    {
        dd("Legamos aqui");
        $box = Box::find($id);
        return response()->json($box->peso);
    }
}

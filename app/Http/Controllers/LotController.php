<?php

namespace App\Http\Controllers;

use App\Models\Acopio;
use App\Models\Box;
use App\Models\Customer;
use App\Models\Huerto;
use App\Models\Lot;
use App\Models\Proceso;
use App\Models\Referente;
use App\Models\Truck;
use Illuminate\Http\Request;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recibas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $acopios = Acopio::all();
        $huertos = Huerto::all();
        $procesos = Proceso::all();
        return view('recibas.create', compact('customers','acopios','huertos','procesos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lote = new Lot();
        $lote->customer_id = $request->customer_id;
        $lote->referente_id = null;
        if ($request->referente_id) {
            $lote->referente_id = $request->referente_id;
        }
        $lote->acopio_id = null;
        if ($request->acopio_id) {
            $lote->acopio_id = $request->acopio_id;
        }
        $lote->huerto_id = null;
        if ($request->huerto_huerto) {
            $huerto = new Huerto();
            $huerto->huerto = $request->huerto;
            $huerto->hue = $request->hue;
            $huerto->productor = $request->productor;
            $huerto->localidad = $request->localidad;
            $huerto->municipio = $request->municipio;
            $huerto->estado = $request->estado;
            $huerto->save();
            $lote->huerto_id = $huerto->id;
        }
        $lote->guia = null;
        if ($request->guia) {
            $lote->guia = $request->guia;
        }
        $lote->fecha_corte = $request->fecha_corte;
        $lote->peso_externo = $request->peso_externo;
        $lote->proceso_id = $request->proceso_id;

        $truck = new Truck();
        $truck->tipo = $request->tipo;
        $truck->marca = $request->marca;
        $truck->color = $request->color;
        $truck->placas = $request->placas;
        $truck->chofer = $request->chofer;
        $truck->save();
        $lote->truck_id = $truck->id;
        $lote->comentarios = $request->comentarios;
        $lote->save();
        $boxes = Box::all();
        return view('detalles.detalletarima',compact('lote','boxes'));
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

    public function reciba(string $id)
    {
        $customers = Referente::where('customer_id', $id)->get();
        return response()->json($customers);
        // dd($customers);
    }
}

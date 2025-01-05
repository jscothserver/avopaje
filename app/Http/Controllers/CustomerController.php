<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Direccione;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }
    public function create()
    {
        return view('customers.create');
    }
    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->empresa = $request->empresa;
        $customer->name = $request->name;
        $customer->rfc = $request->rfc;
        $customer->phone = $request->phone;
        $customer->save();
        if ($request->direccion != null) {
            $direccion = new Direccione();
            $direccion->customer_id = $customer->id;
            $direccion->direccion = $request->calle;
            $direccion->colonia = $request->colonia;
            $direccion->codigo_postal = $request->codigopostal;
            $direccion->ciudad = $request->ciudad;
            $direccion->estado = $request->estado;
            $direccion->save();
        }
        return redirect()->route('customers.index');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
}

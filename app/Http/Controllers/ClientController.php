<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::where('status', '=', 1)->get();
        
        return view('tablas.Clientes')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.agregarCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('Name');
        $client->lastName = $request->input('lastName');
        $client->Email = $request->input('Email');
        $client->Phone = $request->input('Phone');
        $client->Status = 1; 
        $client->created_at = date('Y-m-d H:i:s', strtotime('now'));
        
        // Intentar guardar el cliente en la base de datos
        try {
            $client->save();
            session()->flash('cliente_guardado', true); // Indicador de éxito
        } catch (\Exception $e) {
            session()->flash('cliente_error', true); // Indicador de error
        }
    
        return redirect()->route('clientes.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clienteData = Client::find($id);

        if (!$clienteData) {
            // Si el cliente no existe, puedes redireccionar a una página de error o mostrar un mensaje, según lo desees.
            return redirect()->route('clientes.index')->with('error', 'El cliente no fue encontrado.');
        }
        return view('formularios.modificarCliente', compact('clienteData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Obtener el cliente desde la base de datos utilizando el ID proporcionado
        $client = Client::find($id);
    
        // Verificar si se encontró el cliente
        if (!$client) {
            // Si el cliente no existe, puedes redireccionar a una página de error o mostrar un mensaje, según lo desees.
            return redirect()->route('clientes.index')->with('error', 'El cliente no fue encontrado.');
        }
    
        // Actualizar los datos del cliente con los valores del formulario
        $client->name = $request->input('Name');
        $client->lastName = $request->input('lastName');
        $client->Email = $request->input('Email');
        $client->Phone = $request->input('Phone');
        $client->Status = 1; 
        $client->updated_at = date('Y-m-d H:i:s', strtotime('now'));
        
        // Intentar guardar el cliente en la base de datos
        try {
            $client->update();
            session()->flash('cliente_modificado', true); // Indicador de éxito
        } catch (\Exception $e) {
            session()->flash('cliente_error', true); // Indicador de error
        }
    
        return redirect()->route('clientes.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $cliente = Client::find($id);
        if ($cliente) {
            $cliente->status = 0;
            try {
                $cliente->update();
                session()->flash('cliente_eliminado', true); // Indicador de éxito
            } catch (\Exception $e) {
                session()->flash('cliente_error', true); // Indicador de error
            }
        
            return redirect()->route('clientes.index');
    }
}
}

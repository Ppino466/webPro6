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

        

        $validateData = $this->validate($request, [
            'telefono' => 'required|min:14',
            'correo' => 'required',
            'nombre' => 'required'
        ]);

        $client = new Client();
        $client -> name = $request->input('nombre');
        $client ->lastName = $request->input('apellidos');
        $client ->Email = $request->input('correo');
        $client ->Phone = $request->input('telefono');
        $client->Status = 1; 
        $client->created_at = date('Y-m-d H:i:s', strtotime('now'));
        $client->save();
        return redirect()->route('tablas.Clientes')->with(array( 'message' => 'El video se ha subido correctamente'
    ));


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
        //
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
        //
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
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteFormRequest $request){
        try {

            $cliente = new Cliente();
            $cliente->nombres = $request->input('nombres');
            $cliente->apellidos = $request->input('apellidos');
            $cliente->email = $request->input('email');
            // $cliente->dni = $request->input('dni');
            $cliente->telefono = $request->input('celular');
            $cliente->carrera = $request->input('carrera');
            $cliente->colegio = $request->input('campus');
            $cliente->anioegreso = $request->input('egreso');
            // $cliente->terminos = $request->input('terminos');
            $cliente->idcampania = 1;

            $cliente->save(); 

            return redirect()->route('index')->with('success', 'Su registo se realizó correctamente');

        } catch (QueryException $e) {
            return back()->withInput()->with('failed', 'Ocurrió un error inesperado. Intente nuevamente más tarde.');

        } catch (Exception $e) {
            return back()->withInput()->with('failed', 'Ocurrió un error inesperado. Intente nuevamente más tarde.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $cliente->nombreapellido = $request->input('nombres');
            //$cliente->apellidos = $request->input('apellidos');
            $cliente->email = $request->input('email');
            $cliente->pais = $request->input('country');
            // $cliente->dni = $request->input('dni');
            $cliente->telefono = $request->input('celular');
            $cliente->profesion = $request->input('profesion');
            $cliente->empresa = $request->input('empresa');
            $cliente->carrera = $request->input('carrera');
            $cliente->origen = $request->input('origen');
            $cliente->campaign_source = $request->input('utm_source');
            $cliente->campaign_medium = $request->input('utm_medium');
            $cliente->campaign_name = $request->input('utm_campaign');
            $cliente->campaign_term = $request->input('utm_term');
            $cliente->campaign_content = $request->input('utm_content');
            $cliente->idcampania = config('app.campaign_code');
            // $cliente->terminos = $request->input('terminos');
            $cliente->save(); 

            //Mail::to($cliente->email)->send(new MessageReceived($cliente));
            //Mail::to('feriavirtual@info.uwiener.edu.pe')->send(new MessageReceptor($cliente));

            DB::commit();
            return redirect()->route('thanks');

        } catch (QueryException $e) {
            DB::rollback();
            //dd($e);
            $duplicateEntry = 1062; // registro duplicado
            $messageUser = "";

            if (count($e->errorInfo)) {
                if ($e->errorInfo[1] == $duplicateEntry) {
                    $messageUser = ['warning' => 'La dirección de correo electrónico que ha ingresado ya está registrada.'];
                } else {
                    $messageUser = ['failed' => 'Ocurrió un error inesperado. Intente nuevamente más tarde.'];
                }

            } else {
                $messageUser = ['failed' => 'Ocurrió un error inesperado. Intente nuevamente más tarde.'];
            }

            return back()->withInput()->with($messageUser);
        } catch (Exception $e) {
            DB::rollback();
            //dd($e);
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

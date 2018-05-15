<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entradas;
use App\Tarifas;
use App\Veiculos;

class EntradasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
     $veiculos = Veiculos::latest()->paginate(50);
     return view('entrada.index',compact('veiculos'));
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
      $veiculos = Veiculos::latest()->paginate(50);
      $tarifas = Tarifas::latest()->paginate(50);
        return view('entrada.create',compact('veiculos','tarifas'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {
     request()->validate([
       'id_veiculos'   => 'required',
       'entra'          => 'required',
       'sai'           => 'required',
       'tarifas_id'   => 'required',
     ]);

     Entradas::create($request->all());

      return redirect()
       ->route('entrada.index')
       ->with('success','Registrado com sucesso');

   }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
}

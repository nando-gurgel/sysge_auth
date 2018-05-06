<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Veiculos;

class ClientesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

      $clientes = Clientes::latest()->paginate(5);

      return view('clientes.index',compact('clientes'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
	  $veiculos = Veiculos::latest()->paginate(50);

      return view('clientes.create',compact('veiculos'));
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $this->validate($request,[
      'nome'          => 'required',
      'cpf'           => 'required',
      'telefone'      => 'required',
      'veiculos_id'   => 'required',
      'email'    		=> 'required|email|unique:clientes',
    ]);

    $request['cpf'] = preg_replace('/\D/', '', $request['cpf']);
    $request['telefone'] = preg_replace('/\D/', '', $request['telefone']);


  Clientes::create($request->all());


      return redirect()
          ->route('clientes.index')
          ->with('success','Cadastro criado com sucesso');
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

      $cliente = Clientes::find($id);
      return view('clientes.show',compact('cliente'));
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
		$veiculos = Veiculos::latest()->paginate(50);


		$cliente = Clientes::find($id);
		return view('clientes.edit',compact('cliente','veiculos'));
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
      request()->validate([
          'nome'          => 'required',
          'cpf'           => 'required',
          'telefone'      =>'required',
          'veiculos_id'   =>'required',
		  'email'    		=> 'required|email|unique:clientes',
      ]);

      $request['cpf'] = preg_replace('/\D/', '', $request['cpf']);
      $request['telefone'] = preg_replace('/\D/', '', $request['telefone']);

      Clientes::find($id)->update($request->all());
      return redirect()->route('clientes.index')
          ->with('success','Cadastro atualizado com sucesso');
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      Clientes::find($id)->delete();
      return redirect()->route('clientes.index')
          ->with('success','Cadastro excluído com sucesso');
  }
}

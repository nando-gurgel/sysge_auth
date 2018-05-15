<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculos;
use App\Clientes;

class VeiculosController extends Controller
{
  protected $tipos = array(
      '1'=> 'Pequeno',
      '2'=>'Médio',
      '3'=>'Grande',
  );

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

      $veiculos = Veiculos::latest()->paginate(5);

      return view('veiculos.index',compact('veiculos'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

		$tipos = $this->tipos;

      return view('veiculos.create',compact('tipos'));
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      request()->validate([
          'tipo'     => 'required',
          'marca'    => 'required',
          'modelo'   => 'required',
          'placa'    => 'required|unique:veiculos',
      ]);


      Veiculos::create($request->all());

      return redirect()
          ->route('veiculos.index')
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
      $tipos = $this->tipos;
      $clientes = Clientes::latest()->paginate(5);


      $veiculo = Veiculos::find($id);
      return view('veiculos.show',compact('veiculo','tipos','clientes'));
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

	   $tipos = $this->tipos;

      $veiculo = Veiculos::find($id);
      return view('veiculos.edit',compact('veiculo','tipos'));
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
        'tipo'      => 'required',
        'marca'     => 'required',
        'modelo'    =>'required',
        'placa'     => 'required|unique:veiculos',
      ]);

      Veiculos::find($id)->update($request->all());

      return redirect()->route('veiculos.index')
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
      Veiculos::find($id)->delete();
      return redirect()->route('veiculos.index')
          ->with('success','Cadastro excluído com sucesso');
  }
}

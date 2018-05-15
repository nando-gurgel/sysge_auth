<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;



class UsuariosController extends Controller
{
	public function index()
  {

      $usuarios = User::latest()->paginate(5);

      return view('usuarios.index',compact('usuarios'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }
  public function create()
  {
	  $usuarios = User::latest()->paginate(50);

      return view('usuarios.create',compact('usuarios'));
  }
  public function store(Request $request)
  {

    request()->validate([
        'nome'          => 'required',
        'email'           => 'required',
        'senha'      => 'required',
    ]);


      User::create($request->all());

      return redirect()
          ->route('usuarios.index')
          ->with('success','Cadastro criado com sucesso');
  }
	public function edit($id)
  {
		$veiculos = User::latest()->paginate(50);


		$cliente = User::find($id);
		return view('usuarios.edit',compact('usuarios'));
  }
  public function destroy($id)
  {
      User::find($id)->delete();
      return redirect()->route('usuarios.index')
          ->with('success','Cadastro excluído com sucesso');
  }
}
	//====================

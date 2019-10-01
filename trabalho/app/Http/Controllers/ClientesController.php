<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
	// Método inicial do Controller clientes
	public function index() {
		$clientes = DB::table('clientes')->select('id', 'nome', 'data_nascimento', 'cpf', 'email', 'telefone')->orderBy('id', 'asc')->get();
		return view('listar', ['clientes' => $clientes]);
	}

	// Método utilizado para detalhar um determinado item
	public function show($id) {
		$cliente = DB::table('clientes')->where('id', $id)->get();
		return view('detalhes', ['cliente' => $cliente]);
	}

	// Mostra a view de cadastro de um novo cliente.
	public function create() {
		return view('novo');
	}

	// Valida e grava as informações do cadastro do novo cliente.
	public function store(Request $request) {
		$request->validate([
			'nome'            => 'required',
			'data_nascimento' => 'required|numeric',
			'cpf'             => 'required',
			'email'           => 'required',
			'telefone'        => 'required'
		]);

		$cliente = [
			'nome'            => $request->input('nome'),
			'data_nascimento' => $request->input('data_nascimento'),
			'cpf'             => $request->input('cpf'),
			'email'           => $request->input('email'),
			'telefone'        => $request->input('telefone')
		];

		DB::table('clientes')->insert($cliente);
		return redirect('/clientes')->with('mensagem', 'cliente Cadastrado com Sucesso!');
	}

	public function edit($id) {
		$cliente = DB::table('clientes')->where('id', $id)->get();
		return view('editar', ['clientes' => $cliente]);
  	}

	public function update(Request $request, $id) {
		$request->validate([
			'nome'  => 'required',
			'data_nascimento'      => 'required|numeric',
			'cpf' => 'required',
			'email' => 'required',
			'telefone' => 'required'
		]);

		$cliente = [
			'id'     => $id,
			'nome'  => $request->input('nome'),
			'data_nascimento'      => $request->input('data_nascimento'),
			'cpf' => $request->input('cpf'),
			'email' => $request->input('email'),
			'telefone' => $request->input('telefone')
		];

		DB::table('clientes')->where('id', $id)->update($cliente);
		return redirect('/clientes')->with('mensagem', 'cliente Alterado!');
	}

	// Exclusão de um cliente cadastrado.
	public function destroy($id) {
		DB::table('clientes')->where('id', $id)->delete();
		return redirect('/clientes')->with('mensagem', 'cliente '. $id .' Excluído!');
	}
}
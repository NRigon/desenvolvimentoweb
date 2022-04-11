<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fornecedor;

class fornecedoresController extends Controller
{
    //
    function cadastro_novo(){
        return view('novo_fornecedor');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $endereço = $req->input('endereço');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $fornecedor = new fornecedor();
        $fornecedor->nome = $nome;
        $fornecedor->endereço = $endereço;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function listar(){
        $fornecedores = fornecedor::all();

        return view('lista_fornecedor', ['fornecedores' => $fornecedores]);
    }

    function alterar($id){
        $fornecedor = fornecedor::findOrFail($id);

        return view('altera_fornecedor', ['fornecedor' => $fornecedor]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $endereço = $req->input('endereço');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');


        $fornecedor = fornecedor::findOrFail($id);
        $fornecedor->nome = $nome;
        $fornecedor->endereço = $endereço;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function excluir($id){
        $fornecedor = fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores_listar');
    }
}

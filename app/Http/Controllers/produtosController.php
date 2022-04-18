<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class produtosController extends Controller
{
    //
    function cadastro_novo(){
        return view('novo_produto');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $codbarras = $req->input('codbarras');


        $produto = new produto();
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->codbarras = $codbarras;


        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function listar(){
        $produtos = produto::all();

        return view('lista_produto', ['produtos' => $produtos]);
    }

    function alterar($id){
        $produto = produto::findOrFail($id);

        return view('altera_produto', ['produto' => $produto]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $codbarras = $req->input('codbarras');


        $produto = produto::findOrFail($id);
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->codbarras = $codbarras;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function excluir($id){
        $produto = produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos_listar');
    }
}

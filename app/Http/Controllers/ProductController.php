<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $produto = new Produto();
        $produto->name = "teste de produtod";
        $produto->descricao = 'descricao do teste';
        $produto->preco = 250.00;
        $produto->save();
        return redirect('/');
    }

    public function update(Request $request, Produto $produto) {
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->save();
        return redirect()->route('produtos.index');
    }

    public function destroy(Produto $produto) {
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all(); // Faz o rquerimento de todos os dados do model
        return view('produtos.index', compact('produtos')); // Retorna os dados  para a view indicada 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('1');
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Produto = new Produto();

        $Produto->nome = request('nome'); // faz uma solicitação HTTP dos dados indicados
        $Produto->preco = request('preco');
        

        $Produto->save();

        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = Produto::findOrFail($id);// se o id nção for encontrado exibe menssagem de erro
        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = Produto::findOrFail($id);
        return view('produtos.edit',compact('produtos'));
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
        //dd('grttt');

        $Produto = new Produto();

        $Produto->nome = request('nome');
        $Produto->preco = request('preco');


        $Produto->save();

        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('dele');
        Produto::findOrFail($id)->delete();
        return redirect('/produtos');
    }
}

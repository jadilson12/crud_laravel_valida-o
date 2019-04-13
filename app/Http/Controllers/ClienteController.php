<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::all();
        return view('cliente', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $mesagem = [
                'nome.required' => 'Nome é obrigatório',
                'nome.min' => 'Tem que ter no mímino 5 caracterias',
                'nome.max' => 'Não é primitido valor acima de 10 caracterias',
                'nome.unique' => 'Nome não está dosponivel',
                'required' => 'O :attribute é obrigatório',
                'email.required' => 'Email é obrigatório',
                'email.email' => 'Favor digite um e-mail correto'
        ];

        $request->validate([
            'nome'=> 'required|min:5|max:10|unique:clientes',
            'idade'=> 'required',
            'email'=> 'required|email',
            'fone'=> 'required'
          ], $mesagem);

        dd($mesagem);
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('fone');
        $cliente->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

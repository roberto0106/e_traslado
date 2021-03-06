<?php

namespace App\Http\Controllers;

use App\guias;
use App\roteiros;
use Illuminate\Http\Request;

class GuiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $guias = guias::all();
        return view('guias.index',compact('guias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $rot = roteiros::all();

        return view('guias.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guia = new guias;
        $guia->nome = $request->nome;
        $guia->sobrenome=$request->sobrenome;
        $guia->especialidades = $request->especialidades;
        $guia->telefone = $request->telefone;
        $guia->save();
        dd($guia);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\guias  $guias
     * @return \Illuminate\Http\Response
     */
    public function show(guias $guias)
    {
        return view('guias.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\guias  $guias
     * @return \Illuminate\Http\Response
     */
    public function edit(guias $guias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\guias  $guias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guias $guias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\guias  $guias
     * @return \Illuminate\Http\Response
     */
    public function destroy(guias $guias)
    {
        //
    }
}

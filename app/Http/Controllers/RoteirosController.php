<?php

namespace App\Http\Controllers;

use App\roteiros;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RoteirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $search = request('data_evento');

        if($search){
            $roteiros = roteiros::where('data_partida','=',$search)->get();
        }else{
            $roteiros = roteiros::all();
        }
         return view('roteiros.index', compact('roteiros','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roteiros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $novo_roteiro = new roteiros;
       $novo_roteiro->foto = 'https://thumbs.dreamstime.com/b/lake-mountains-5703492.jpg';
       $novo_roteiro->estado = $request->estado;
       $novo_roteiro->cidade = $request->cidade;
       $novo_roteiro->local = $request->local;
       $novo_roteiro->descricao = $request->descricao;
       $novo_roteiro->data_partida = $request->data_partida;
       $novo_roteiro->hora_partida = $request->hora_partida;
       $novo_roteiro->data_retorno = $request->data_retorno;
       $novo_roteiro->hora_retorno = $request->hora_retorno;
       $novo_roteiro->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\roteiros  $roteiros
     * @return \Illuminate\Http\Response
     */
    public function show($roteiros)
    {
        
        $roteiros = roteiros::where('id',$roteiros)->get();
        return view('roteiros.show', compact('roteiros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roteiros  $roteiros
     * @return \Illuminate\Http\Response
     */
    public function edit(roteiros $roteiros)
    {
        
        return view('roteiros.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roteiros  $roteiros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roteiros $roteiros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roteiros  $roteiros
     * @return \Illuminate\Http\Response
     */
    public function destroy(roteiros $roteiros)
    {
        //
    }

    public function get_roteiros()
    {
        $datas=[];
        $roteiros = roteiros::all();
        foreach ($roteiros as $key => $value) {
            $datas[]=$value->data_partida;
        }
        
        return $datas;
    }

    public function search_data_roteiros(Request $request){
        $search = Carbon::parse($request->data)->toDateString();
        $roteiros = roteiros::where('data_partida',$search)->get(); 
        return view('roteiros.index', compact('roteiros','search'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisito;
use App\Evidencia;
use App\Comentario;

class RequisitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Requisito::all();
        $title = "Requisitos";
        $requisito = Requisito::all();
        $requisito->load('user');
        $auditoria = Evidencia::all();
        //dd($auditoria);
        return view('auditoria.index', compact('title','requisito','auditoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requisito = Requisito::where('id', $id)->first();
        $requisito->load('user');
        $evidencia = Evidencia::where('id_requisito', $id)->first();
        $comentario = Comentario::where('id_evidencia', $evidencia->id);
        //dd( $comentario );
        $title = "Requisito $id";

        return view('requisitos.index', compact('requisito','title','evidencia'));
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

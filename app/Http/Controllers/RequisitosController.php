<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisito;
use App\Evidencia;

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
        $title = "Auditoria";
        $requisito = Requisito::all();
        $requisito->load('user');
        $auditoria = Evidencia::all('evidencia', 'situacao');
        //dd($requisito);
        return view('auditoria.index', compact('title'), compact('requisito'), compact('auditoria'));
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
        //dd( $evidencia );
        $title = "Requisito $id";

        return view('requisitos.index', compact('requisito'), compact('title'), compact('evidencia'));
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

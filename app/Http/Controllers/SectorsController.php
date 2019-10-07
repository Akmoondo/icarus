<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SectorsRepository;


class SectorsController extends Controller
{
    protected $sectorsRepository;
    
    public function __construct(SectorsRepository $sectorsRepository)
    {
       $this->sectorsRepository = $sectorsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = $this->sectorsRepository->index();
        //$sectors->load('companies');
        return view('sectors.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = $this->sectorsRepository->create();
        return $sectors;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $sectors = $this->sectorsRepository->store($inputs);
        return redirect()->route('sectors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sectors = $this->sectorsRepository->show($id);
        return $sectors;
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
        $sectors = $this->sectorsRepository->update($id, $request);
        return  redirect()->route('sectors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sectors = $this->sectorsRepository->destroy($id);
        return redirect()->route('sectors.index');
    }
}
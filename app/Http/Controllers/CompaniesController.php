<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompaniesRepository;

class CompaniesController extends Controller
{
    protected $companiesRepository;
    
    public function __construct(CompaniesRepository $companiesRepository)
    {
       $this->companiesRepository = $companiesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companiesRepository->index();

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = $this->companiesRepository->create();
        return view('companies.create', compact('companies'));
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
        $companies = $this->companiesRepository->store($inputs);
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = $this->companiesRepository->show($id);
        return view('companies.show', compact('company'));
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
        $companies = $this->companiesRepository->update($id, $request);
        return  redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies = $this->companiesRepository->destroy($id);
        return redirect()->route('companies.index');
    }
}


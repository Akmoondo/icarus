<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SectorsRepository;
use App\Repositories\CompaniesRepository;

class SectorsController extends Controller
{
    protected $sectorsRepository;
    protected $companyRepository;
    
    public function __construct(SectorsRepository $sectorsRepository, CompaniesRepository $companyRepository)
    {
       $this->sectorsRepository = $sectorsRepository;
       $this->companyRepository = $companyRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $company_uuid)
    {
        $sectors = $this->sectorsRepository->index( $company_uuid );
        $company = $this->companyRepository->show( $company_uuid );
        //dd ( $company );
        return view('companies.sectors.index', compact('sectors', 'company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $company_uuid )
    {
       // aqui vem os dados da company que o setor vai puxar
        $company = $this->companyRepository->show( $company_uuid );

        return view('companies.sectors.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $company_uuid)
    {
        $inputs = $request->all();
        $sectors = $this->sectorsRepository->store($inputs, $company_uuid);
        return redirect()->route('companies.sectors.index', $company_uuid);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($company_uuid, $sector_uuid)
    {
        $sectors = $this->sectorsRepository->show( $sector_uuid );
        $company = $this->companyRepository->show( $company_uuid );
        return view('companies.sectors.show', compact('sectors', 'company'));
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
    public function update(Request $request, $company_uuid , $id)
    {
        $sectors = $this->sectorsRepository->update($id, $request);
        return  redirect()->route('companies.sectors.index', $company_uuid);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($company_uuid, $id)
    {
        $sectors = $this->sectorsRepository->destroy($id);
        return redirect()->route('companies.sectors.index', $company_uuid);
    }
}

<?php

namespace App\Http\Controllers;

use App\Evidence;
use App\Repositories\EvidencesRepository;
use App\Repositories\ReferencesRepository;
use App\Repositories\RequirementsRepository;
use App\Repositories\SectorsRepository;
use App\Repositories\SituationsRepository;
use App\Repositories\ValidationsRepository;
use App\Repositories\CompaniesRepository;

use App\Requirement;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    protected $referencesRepository;
    protected $situationsRepository;
    protected $sectorsRepository;
    protected $requirementsRepository;
    protected $evidencesRepository;
    protected $validationsRepository;
    protected $companiesRepository;

    public function __construct(
        ReferencesRepository $referencesRepository,
        SituationsRepository $situationsRepository,
        EvidencesRepository $evidencesRepository,
        RequirementsRepository $requirementsRepository,
        SectorsRepository $sectorsRepository,
        ValidationsRepository $validationsRepository,
        CompaniesRepository $companiesRepository
    ){
       $this->referencesRepository = $referencesRepository;
       $this->evidencesRepository = $evidencesRepository;
       $this->requirementsRepository = $requirementsRepository;
       $this->sectorsRepository = $sectorsRepository;
       $this->situationsRepository = $situationsRepository;
       $this->validationsRepository = $validationsRepository;
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
        $requirements = $this->requirementsRepository->index();
        $situations = $this->situationsRepository->index();
       // dd ($requirements);
        return view('audit.index2', compact('companies','requirements', 'situations'));
    }

    public function audit(Request $request, $company_uuid)
    {
        $requirements = $this->requirementsRepository->index();
        $sectors = $this->sectorsRepository->index( $company_uuid );
        $company = $this->companiesRepository->show( $company_uuid );
       // dd ($requirements);
        return view('audit.index', compact('requirements', 'sectors', 'company'));
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
        $requirements = $this->requirementsRepository->audit($id);
        $evidences = $this->evidencesRepository->show_requirement($id);
        $situations = $this->situationsRepository->index();
        $validations = $this->validationsRepository->index();
        return view('audit.show', compact('requirements', 'evidences', 'situations', 'validations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request, $requirements_uuid )
    { 
        $inputs = $request->all();

        $requirement = Requirement::where('uuid', $requirements_uuid)->update([
            'situation_uuid' => $inputs['situation_uuid'],
        ]);

        return back();
    }

    public function editValidation( Request $request, $evidences_uuid )
    { 
        $inputs = $request->all();

        $evidence = Evidence::where('uuid', $evidences_uuid)->update([
            'validation_uuid' => $inputs['validation_uuid'],
        ]);

        return back();
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

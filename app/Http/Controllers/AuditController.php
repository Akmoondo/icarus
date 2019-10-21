<?php

namespace App\Http\Controllers;

use App\Repositories\EvidencesRepository;
use App\Repositories\ReferencesRepository;
use App\Repositories\RequirementsEvidencesRepository;
use App\Repositories\RequirementsRepository;
use App\Repositories\SectorsRepository;
use App\Repositories\SituationsRepository;

use App\Requirement;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    protected $referencesRepository;
    protected $situationsRepository;
    protected $sectorsRepository;
    protected $requirementsRepository;
    protected $evidencesRepository;
    protected $requirementsEvidencesRepository;
    public function __construct(
        ReferencesRepository $referencesRepository,
        SituationsRepository $situationsRepository,
        EvidencesRepository $evidencesRepository,
        RequirementsRepository $requirementsRepository,
        SectorsRepository $sectorsRepository,
        RequirementsEvidencesRepository $requirementsEvidencesRepository
    ){
       $this->referencesRepository = $referencesRepository;
       $this->evidencesRepository = $evidencesRepository;
       $this->requirementsRepository = $requirementsRepository;
       $this->sectorsRepository = $sectorsRepository;
       $this->situationsRepository = $situationsRepository;
       $this->requirementsEvidencesRepository = $requirementsEvidencesRepository;
    }

   
     
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requirements = $this->requirementsRepository->index();
       // dd ($requirements);
        return view('audit.index', compact('requirements'));
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
        $requirementEvidences = $this->requirementsEvidencesRepository->evidencesByRequirementId( $id );
        //dd($requirements, $requirementEvidences);
        $evidences = $this->evidencesRepository->index();
        $situations = $this->situationsRepository->index();
        return view('audit.show', compact('requirements', 'evidences', 'situations', 'requirementEvidences'));
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

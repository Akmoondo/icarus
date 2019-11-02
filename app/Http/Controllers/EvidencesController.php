<?php

namespace App\Http\Controllers;

use App\Evidence;
use Illuminate\Http\Request;
use App\Repositories\EvidencesRepository;
use App\Repositories\RequirementsRepository;
use App\Requirement;

class EvidencesController extends Controller
{
    protected $evidencesRepository;
    
    public function __construct(EvidencesRepository $evidencesRepository, RequirementsRepository $requirementsRepository)
    {
       $this->evidencesRepository = $evidencesRepository;
       $this->requirementsrepository = $requirementsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evidences = $this->evidencesRepository->index();

        return view('audit.requirements.evidences.index', compact('evidences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evidences = $this->evidencesRepository->create();
        $requirements = Requirement::all();
        return view('audit.requirements.evidences.create', compact('evidences', 'requirements'));
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
        $evidences = $this->evidencesRepository->store($inputs);
        return redirect()->route('audit.index');
    }

    public function show($evidences_id)
    {
        $evidence = Evidence::where('uuid', $evidences_id )->first();

        return view('audit.requirements.evidences.show', compact('evidence'));
    }


    public function destroy($id)
    {
        $evidences = $this->evidencesRepository->destroy($id);
        return redirect()->route('audit.requirements.evidences.index');
    }
}

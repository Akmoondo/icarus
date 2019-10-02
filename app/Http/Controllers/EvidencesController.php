<?php

namespace App\Http\Controllers;

use App\Evidence;
use Illuminate\Http\Request;
use App\Repositories\EvidencesRepository;

class EvidencesController extends Controller
{
    protected $evidencesRepository;
    
    public function __construct(EvidencesRepository $evidencesRepository)
    {
       $this->evidencesRepository = $evidencesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evidences = $this->evidencesRepository->index();

        return view('evidences.index', compact('evidences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $situations = $this->evidencesRepository->create();
        return $situations;
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
        return redirect()->route('evidences.index');
    }

    public function show($evidences_id)
    {
        $evidence = Evidence::where('uuid', $evidences_id )->first();

        return view('evidences.show', compact('evidence'));
    }

    public function destroy($id)
    {
        $evidences = $this->evidencesRepository->destroy($id);
        return redirect()->route('evidences.index');
    }
}

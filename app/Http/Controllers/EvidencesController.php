<?php

namespace App\Http\Controllers;

use App\Evidence;
use Illuminate\Http\Request;
use App\Repositories\EvidencesRepository;
use App\Repositories\RequirementsRepository;
use App\Requirement;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

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
        if (Gate::forUser(Auth::user())->denies('user-validate', 'evidencia-list')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $evidences = $this->evidencesRepository->index();

        return view('audit.requirements.evidences.index', compact('evidences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $requirement_uuid)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'evidencia-create')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $evidences = $this->evidencesRepository->create();
        $requirements = Requirement::where('uuid', $requirement_uuid)->first();
        //dd($requirements);

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
        if (Gate::forUser(Auth::user())->denies('user-validate', 'evidencia-save')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $path = $request->file('evidence')->store('evidencias', 'public');
        $evidence = new Evidence();
        $evidence->uuid = $request->input('uuid');
        $evidence->requirement_uuid = $request->input('requirement_uuid');
        $evidence->name = $request->input('name');
        $evidence->comment = $request->input('comment');
        $evidence->evidence = $path;
        $evidence->user_uuid = Auth::user()->uuid;
        $evidence->save();
        return back();
    }

    public function show($evidences_id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'evidencia-show')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $evidence = Evidence::where('uuid', $evidences_id)->first();
        $evidence->load('user');
        //dd ($evidence);

        return view('audit.requirements.evidences.show', compact('evidence'));
    }

    public function download($uuid)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'evidencia-download')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $evidence = Evidence::where('uuid', $uuid)->first();
        //dd($evidence);
        $path = Storage::disk('public')->getDriver()->getAdapter()->applyPathPrefix($evidence->evidence);
        return response()->download($path);
    }


    public function destroy($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'evidencia-delete')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $evidences = $this->evidencesRepository->destroy($id);
        return view('home');
    }
}

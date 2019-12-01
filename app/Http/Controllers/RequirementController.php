<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use App\Repositories\RequirementsRepository;
use App\Sector;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class RequirementController extends Controller
{
    protected $requirementsRepository;
    
    public function __construct(RequirementsRepository $requirementsRepository)
    {
       $this->requirementsRepository = $requirementsRepository;
    }
    
    public function index()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'requisito-list')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $requirements = $this->requirementsRepository->index();

        dd( $requirements );
        return view('audit.requirements.index', compact('requirements'));
    }

    public function create(Request $request, $company_uuid, $sector_uuid)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'requisito-create')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $requirements = $this->requirementsRepository->create($company_uuid, $sector_uuid);
        $sector = Sector::where('uuid', $sector_uuid)->first();
        $references = Reference::all(); 
        return view('audit.requirements.create', compact('requirements', 'sector', 'references'));
    }

    public function store(Request $request)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'requisito-save')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $inputs = $request->all();
        $requirements = $this->requirementsRepository->store($inputs);
        return back();
    }

    public function show($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'requisito-show')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $requirements = $this->requirementsRepository->show($id);
        //dd($requirements);
        $references = Reference::all();
        return view('audit.requirements.show', compact('requirements', 'references'));
    }

    public function edit($id)
    {
        //
    }
 
    public function update(Request $request, $id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'requisito-update')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        //dd( $request->all() );
        $requirements = $this->requirementsRepository->update($id, $request);
        return back();
    }

    public function destroy($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'requisito-delete')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $requirements = $this->requirementsRepository->destroy($id);
        return view('home');
    }
}

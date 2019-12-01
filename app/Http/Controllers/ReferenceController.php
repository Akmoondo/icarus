<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ReferencesRepository;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class ReferenceController extends Controller
{
    protected $referencesRepository;
    
    public function __construct(ReferencesRepository $referencesRepository)
    {
       $this->referencesRepository = $referencesRepository;
    }
 
    public function index()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'referencia-list')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $references = $this->referencesRepository->index();
        
        return view('references.index', compact('references'));
        
    }

    public function create()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'referencia-create')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        return view('references.create');
    }

    public function store(Request $request)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'referencia-save')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $inputs = $request->all();
        $references = $this->referencesRepository->store($inputs);
        return redirect()->route('references.index');
    }

    public function show($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'referencia-show')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $references = $this->referencesRepository->show($id);
        return view('references.show', compact('references'));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'referencia-update')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $references = $this->referencesRepository->update($id, $request);
        return  redirect()->route('references.index');
    }

    
    public function destroy($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'referencia-delete')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $references = $this->referencesRepository->destroy($id);
        return redirect()->route('references.index');
    }
}

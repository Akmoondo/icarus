<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ReferencesRepository;

class ReferenceController extends Controller
{
    protected $referencesRepository;
    
    public function __construct(ReferencesRepository $referencesRepository)
    {
       $this->referencesRepository = $referencesRepository;
    }
 
    public function index()
    {
        $references = $this->referencesRepository->index();

        return view('references.index', compact('references'));
    }

    public function create()
    {
        $references = $this->referencesRepository->create();
        return $references;
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $references = $this->referencesRepository->store($inputs);
        return redirect()->route('references.index');
    }

    public function show($id)
    {
        $references = $this->referencesRepository->show($id);
        return $references;
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $references = $this->referencesRepository->update($id, $request);
        return  redirect()->route('references.index');
    }

    
    public function destroy($id)
    {
        $references = $this->referencesRepository->destroy($id);
        return redirect()->route('references.index');
    }
}

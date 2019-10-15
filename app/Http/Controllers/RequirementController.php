<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use App\Repositories\RequirementsRepository;

class RequirementController extends Controller
{
    protected $requirementsRepository;
    
    public function __construct(RequirementsRepository $requirementsRepository)
    {
       $this->requirementsRepository = $requirementsRepository;
    }
    
    public function index()
    {
        $requirements = $this->requirementsRepository->index();
        return view('audit.requirements.index', compact('requirements'));
    }

    public function create()
    {
        $requirements = $this->requirementsRepository->create();
        return $requirements;
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $requirements = $this->requirementsRepository->store($inputs);
        return redirect()->route('audit.requirements.index');
    }

    public function show($id)
    {
        $requirements = $this->requirementsRepository->show($id);
        return $requirements;
    }

    public function edit($id)
    {
        //
    }
 
    public function update(Request $request, $id)
    {
        $requirements = $this->requirementsRepository->update($id, $request);
        return  redirect()->route('audit.requirements.index');
    }

    public function destroy($id)
    {
        $requirements = $this->requirementsRepository->destroy($id);
        return redirect()->route('audit.requirements.index');
    }
}

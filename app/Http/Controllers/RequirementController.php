<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use App\Repositories\RequirementsRepository;
use App\Sector;


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

        dd( $requirements );
        return view('audit.requirements.index', compact('requirements'));
    }

    public function create(Request $request, $company_uuid, $sector_uuid)
    {
        $requirements = $this->requirementsRepository->create($company_uuid, $sector_uuid);
        $sector = Sector::where('uuid', $sector_uuid)->first();
        $references = Reference::all(); 
        return view('audit.requirements.create', compact('requirements', 'sector', 'references'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $requirements = $this->requirementsRepository->store($inputs);
        return back();
    }

    public function show($id)
    {
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
        //dd( $request->all() );
        $requirements = $this->requirementsRepository->update($id, $request);
        return back();
    }

    public function destroy($id)
    {
        $requirements = $this->requirementsRepository->destroy($id);
        return view('audit.getCompany');
    }
}

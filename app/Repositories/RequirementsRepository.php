<?php

namespace App\Repositories;

use App\Reference;
use App\Requirement;
use Illuminate\Support\Str;

class RequirementsRepository{
 
    public function index()
    {
        $requirements = Requirement::all();
        $requirements->load('reference', 'situation');
        //dd($requirements);
        return $requirements;
    }

    public function show( $requirement_id )
    {
        $requirements = Requirement::where('uuid', $requirement_id )->first();
        $requirements->load('reference');
        return $requirements;
    }
 
    public function audit ( $requirement_id )
    {
        $requirements = Requirement::where('uuid', $requirement_id )->first();
        $requirements->load('reference', 'situation');
        return $requirements;
    }

    public function create (){
        $requirements = Str::uuid();
        $references = Reference::all();
        //return view('requirements.create', compact('requirements', 'references'));
        return compact('requirements', 'references');
    }
    
    public function store ($inputs){
        //dd($inputs);
        $requirement = Requirement::create($inputs);

        return $requirement;
    }
 
    public function update($requirement_id, $inputs)
    {
        $requirement = Requirement::where('uuid', $requirement_id)->update([
            'clause' => $inputs['clause'],
            'requirement' => $inputs['requirement'],
            'brief' => $inputs['brief'],
            //'situation_uuid' => $inputs['situation_uuid'],
            'reference_uuid' => $inputs['reference_uuid'],
            //'requirement_uuid' => $inputs['requirement_uuid'],
        ]);

        return $requirement;
    }

    public function destroy( $requirement_id )
    {
        $requirement = Requirement::where('uuid', $requirement_id)->delete();
        return $requirement;
    }

}
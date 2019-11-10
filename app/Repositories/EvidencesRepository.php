<?php

namespace App\Repositories;

use App\Evidence;
use App\Requirement;
use Illuminate\Support\Str;
use App\Validation;

class EvidencesRepository{

    public function index( $search = null )
    {
        $evidences = Evidence::all();
        $evidences->load('validation');
        //dd($evidences);
        return $evidences;
    }

    public function show( $evidence_id )
    {
        $evidence = Evidence::where('uuid', $evidence_id );
        $evidence->load('validation');
        
        return $evidence;
    }

    public function show_requirement($requirement_uuid){
       
        $evidence = Evidence::where('requirement_uuid', $requirement_uuid )->get();
        return $evidence;

    }
    
    public function create (){
        $evidences = Str::uuid();
        return $evidences;
    }
    public function store ($inputs){
        //dd($inputs);
        //$evidence = Evidence::create($inputs);
        $path = $inputs->file('evidence')->store('evidencias','public');
        $evidence = new Evidence();
       
        $evidence->uuid = $inputs->input('uuid');
        $evidence->requirement_uuid = $inputs->input('requirement_uuid');
        //$evidence->user_uuid = $inputs->input('user_uuid');
        $evidence->name = $inputs->input('name');
        $evidence->comment = $inputs->input('comment');
        $evidence->evidence = $path;
        $evidence->save();
        return true;
    }

    
    public function destroy( $evidence_id )
    {
        $evidence = Evidence::where('uuid', $evidence_id)->delete();
        return $evidence;
    }

}
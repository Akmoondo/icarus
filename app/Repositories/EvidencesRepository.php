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
       
        return $evidences;
    }

    public function show( $evidence_id )
    {
        $evidence = Evidence::where('uuid', $evidence_id );
        $evidence->load('validation');
        return $evidence;
    }

    public function create (){
        $evidences = Str::uuid();
        return $evidences;
    }
    public function store ($inputs){
        $evidence = Evidence::create($inputs);

        return $evidence;
    }

    
    public function destroy( $evidence_id )
    {
        $evidence = Evidence::where('uuid', $evidence_id)->delete();
        return $evidence;
    }

}
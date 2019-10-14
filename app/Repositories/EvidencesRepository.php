<?php

namespace App\Repositories;

use App\Evidence;
use App\Requirement;
use Illuminate\Support\Str;

class EvidencesRepository{

    public function index( $search = null )
    {
        $evidences = Evidence::all();
       
        return $evidences;
    }

    public function show( $evidence_id )
    {
        $evidence = Evidence::where('uuid', $evidence_id );

        return $evidence;
    }

    public function create (){
        $evidences = Str::uuid();
        //$requirements = Requirement::all();
        //return view('evidences.create', compact('evidences', 'requirements'));
        return compact('evidences');
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
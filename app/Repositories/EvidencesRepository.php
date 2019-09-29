<?php

namespace App\Repositories;

use App\Evidence;

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

    public function update($evidence_id, $inputs)
    {
        $evidence = Evidence::where('uuid', $evidence_id)->update([
            'name' => $inputs['name'],
            'password' => bcrypt( $inputs['password'] )
        ]);

        return $evidence;
    }

    public function destroy( $evidence_id )
    {
        $evidence = Evidence::where('uuid', $evidence_id)->delete();
        return $evidence;
    }

}
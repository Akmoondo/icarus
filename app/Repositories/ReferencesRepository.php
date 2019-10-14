<?php

namespace App\Repositories;

use App\Reference;
use Illuminate\Support\Str;

class ReferencesRepository{

    public function index()
    {
        $references = Reference::all();
       
        return $references;
    }

    public function show( $reference_id )
    {
        $reference = Reference::where('uuid', $reference_id )->first();

        
        return $reference;
    }

        
   
    public function store ($inputs){
        $inputs['uuid'] = Str::uuid();
        $reference = Reference::create($inputs);

        return $reference;
    }

    public function update($reference_id, $inputs)
    {
        $reference = Reference::where('uuid', $reference_id)->update([
            'reference' => $inputs['reference'],
        ]);

        return $reference;
    }

    public function destroy( $reference_id )
    {
        $reference = Reference::where('uuid', $reference_id)->delete();
        return $reference;
    }

}
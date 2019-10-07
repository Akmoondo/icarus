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

        return view('references.show', compact('reference'));
    }

    public function create (){
        $references = Str::uuid();
        return view('references.create', compact('references'));
    }
    
    public function store ($inputs){
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
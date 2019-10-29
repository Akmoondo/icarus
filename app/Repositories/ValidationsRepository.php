<?php

namespace App\Repositories;

use App\Validation;
use Illuminate\Support\Str;

class ValidationsRepository{

    public function index()
    {
        $validations = Validation::all();
       
        return $validations;
    }

    public function show( $validation_id )
    {
        $validation = Validation::where('uuid', $validation_id )->first();

        return $validation;
    }
   
    public function store ($inputs){
        $inputs['uuid'] = Str::uuid();
        $validation = Validation::create($inputs);

        return $validation;
    }

    public function update($validation_id, $inputs)
    {
        $validation = Validation::where('uuid', $validation_id)->update([
            'validation' => $inputs['validation'],
            'color' => $inputs['color'],
        ]);

        return $validation;
    }

    public function destroy( $validation_id )
    {
        $validation = Validation::where('uuid', $validation_id)->delete();
        return $validation;
    }
}
<?php

namespace App\Repositories;

use App\Situation;
use Illuminate\Support\Str;

class SituationsRepository{

    public function index()
    {
        $situations = Situation::all();
       
        return $situations;
    }

    public function show( $situation_id )
    {
        $situation = Situation::where('uuid', $situation_id )->first();

        return view('situations.show', compact('situation'));
    }

    public function create (){
        $situations = Str::uuid();
        return view('situations.create', compact('situations'));
    }
    
    public function store ($inputs){
        $situation = Situation::create($inputs);

        return $situation;
    }

    public function update($situation_id, $inputs)
    {
        $situation = Situation::where('uuid', $situation_id)->update([
            'situation' => $inputs['situation'],
            'color' => $inputs['color'],
        ]);

        return $situation;
    }

    public function destroy( $situation_id )
    {
        $situation = Situation::where('uuid', $situation_id)->delete();
        return $situation;
    }

}
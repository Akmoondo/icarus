<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Sector;


class SectorsRepository{

    public function index( $search = null )
    {
        $sectors = Sector::all();
        $sectors->load('companies');
        //dd ($sectors);
        return $sectors;
    }
    
    public function create (){
        $uuid = Str::uuid();
        $sectors = Sector::all();
        $sectors->load('companies');
        return view('sectors.create', compact('uuid', 'sector'));
    }
    
    public function store ($inputs){
        $sector = Sector::create($inputs);

        return $sector;
    }

    public function show( $sector_id )
    {
        $sector = Sector::where('uuid', $sector_id )->first();

        return view('sectors.show', compact('sector'));
    }

    public function update($sector_id, $inputs)
    {
        $sector = Sector::where('uuid', $sector_id)->update([
            'uuid' => $inputs['uuid'],
            'sector' => $inputs['sector'],
        ]);

        return $sector;
    }

    public function destroy( $sector_id )
    {
        $sector = Sector::where('uuid', $sector_id)->delete();
        return $sector;
    }

}
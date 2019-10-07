<?php

namespace App\Repositories;

use App\Company;
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
        $companies = Company::all();
        return view('sectors.create', compact('uuid', 'companies'));
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
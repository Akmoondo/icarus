<?php

namespace App\Repositories;

use App\Company;
use Illuminate\Support\Str;
use App\Sector;


class SectorsRepository{

    public function index( $company_uuid )
    {
        $sectors = Sector::where('company_uuid', $company_uuid)->get();
        //dd ($company_uuid);
        return $sectors;
    }
    
   
    public function store ($inputs, $company_uuid){

        $inputs['uuid'] = Str::uuid();
        $inputs['company_uuid'] = $company_uuid;
        $sector = Sector::create($inputs);

        return $sector; 
    }

    public function show( $sector_uuid )
    {
        $sector = Sector::where('uuid', $sector_uuid)->first();

        //return view('companies.sectors.show', compact('sector'));
        return $sector;
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
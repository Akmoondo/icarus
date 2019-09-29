<?php

namespace App\Repositories;

use App\Company;

class CompanyRepository{

    public function index( $search = null )
    {
     
        $companies = Company::all();
       
        return $companies;
    }

    public function show( $company_id )
    {
        $company = Company::find( $company_id );

        return $company;
    }

    public function update($company_id, $inputs)
    {
        $company = Company::where('id', $company_id)->update([
            'name' => $inputs['name'],
            'password' => bcrypt( $inputs['password'] )
        ]);

        return $company;
    }

    public function destroy( $company_id )
    {
        $company = Company::where('id', $company_id)->delete();
        return $company;
    }

}
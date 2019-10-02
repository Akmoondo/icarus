<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Company;

class CompaniesRepository{

    public function index( $search = null )
    {
        $companies = Company::all();

        return $companies;
    }
    
    public function create (){
        $companies = Str::uuid();
        return view('companies.create', compact('companies'));
    }
    
    public function store ($inputs){
        $company = Company::create($inputs);

        return $company;
    }

    public function show( $company_id )
    {
        $company = Company::where('uuid', $company_id )->first();

        return view('companies.show', compact('company'));
    }

    public function update($company_id, $inputs)
    {
        $company = Company::where('uuid', $company_id)->update([
            'cnpj' => $inputs['cnpj'],
            'name' => $inputs['name'],
            'telphone' => $inputs['telphone'],
            'email' => $inputs['email'],
            'sponsor' => $inputs['sponsor'],
        ]);

        return $company;
    }

    public function destroy( $company_id )
    {
        $company = Company::where('uuid', $company_id)->delete();
        return $company;
    }

}
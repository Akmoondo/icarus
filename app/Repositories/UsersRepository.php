<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\Str;

class UsersRepository{

    public function index( $sector_uuid )
    {
            $users = User::where('sector_uuid', $sector_uuid)->get();
            return $users;
    }
    
    public function store ($inputs, $company_uuid, $sector_uuid){
        $inputs['uuid'] = Str::uuid();
        $user = User::create($inputs);

        return $user;
    }

    public function show( $user_id )
    {
        $user = User::where('uuid', $user_id )->first();

        return $user;
    }

    public function update($user_id, $inputs)
    {
        $user = User::where('uuid', $user_id)->update([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            //'password' => bcrypt( $inputs['password'] )
        ]);

        return $user;
    }


    public function destroy( $user_id)
    {
        $user = User::where('id', $user_id)->delete();
        return $user;
    }

} 
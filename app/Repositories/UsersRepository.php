<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersRepository
{

    public function index($sector_uuid)
    {
        $users = User::where('sector_uuid', $sector_uuid)->get();
        return $users;
    }

    public function store($inputs, $company_uuid, $sector_uuid)
    {
        //dd($company_uuid);
        $inputs['uuid'] = Str::uuid();
        $inputs['sector_uuid'] = $sector_uuid;
        $inputs['company_uuid'] = $company_uuid;
        $user = User::create([
            'uuid' => $inputs['uuid'],
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'password' => Hash::make($inputs['password']),
            'company_uuid' => $inputs['company_uuid'],
            'sector_uuid' => $inputs['sector_uuid'],
            'role_uuid' => $inputs['role_uuid']
        ]);

        return $user;
    }

    public function show($user_id)
    {
        $user = User::where('uuid', $user_id)->first();
        $user->load('role', 'sector', 'evidence');
        return $user;
    }

    public function update($user_id, $inputs)
    {
        $user = User::where('uuid', $user_id)->update([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'password' => bcrypt($inputs['password'])
        ]);

        return $user;
    }


    public function destroy($user_id)
    {
        $user = User::where('id', $user_id)->delete();
        return $user;
    }
}

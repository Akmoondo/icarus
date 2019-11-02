<?php

namespace App\Repositories;

use App\Role;
use Faker\Provider\Uuid;

class RolesRepository
{

    public function index()
    {

        $roles = Role::all();

        return $roles;
    }

    public function save($inputs)
    {
        $inputs['uuid'] = Uuid::uuid();
        $role = Role::create($inputs);
        return $role;
    }

    public function show($role_id)
    {
        $role = Role::where('uuid', $role_id)->first();

        return $role;
    }

    public function update($inputs, $role_id)
    {
        $role = Role::where('uuid', $role_id)->update([
            'name' => $inputs['name']
        ]);

        return $role;
    }

    public function destroy($role_id)
    {
        $role = Role::where('uuid', $role_id)->delete();
        return $role;
    }
}

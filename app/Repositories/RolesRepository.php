<?php

namespace App\Repositories;

use App\Role;

class RolesRepository{

    public function index()
    {
     
        $roles = Role::all();
       
        return $roles;
    }

    public function show( $role_id )
    {
        $role = Role::where('uuid', $role_id );

        return $role;
    }

    public function update($role_id, $inputs)
    {
        $role = Role::where('uuid', $role_id)->update([
            'name' => $inputs['name']
        ]);

        return $role;
    }

    public function destroy( $role_id )
    {
        $role = Role::where('uuid', $role_id)->delete();
        return $role;
    }

}
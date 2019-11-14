<?php

namespace App\Repositories;

use App\RolePrivilege;
use Exception;

class RolesPrivilegesRepository
{

    public function index()
    {
        $privileges = RolePrivilege::orderBy('name', 'asc')->get();
        return $privileges;
    }


    public function save($role_uuid, $inputs)
    {
        try {
            foreach ($inputs as $input) {
                RolePrivilege::insert([
                    'role_uuid' => $role_uuid,
                    'privilege_uuid' => $input
                ]);
            }
        } catch (Exeption $e) {
            throw new Exception('Erro com o cadagstro de privilégio');
        }
    }

    public function show($privilege_id)
    {
        $privilege = RolePrivilege::where('uuid', $privilege_id);

        return $privilege;
    }

    public function destroy($privilege_id)
    {
        $privilege = RolePrivilege::where('uuid', $privilege_id)->delete();
        return $privilege;
    }
}

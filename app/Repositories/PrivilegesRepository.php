<?php

namespace App\Repositories;

use App\Privilege;

class PrivilegeRepository
{

    public function index()
    {

        $privileges = Privilege::orderBy('name', 'asc')->get();

        return $privileges;
    }

    public function show($privilege_id)
    {
        $privilege = Privilege::where('uuid', $privilege_id);

        return $privilege;
    }

    public function destroy($privilege_id)
    {
        $privilege = Privilege::where('uuid', $privilege_id)->delete();
        return $privilege;
    }
}

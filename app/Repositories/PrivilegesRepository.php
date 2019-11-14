<?php

namespace App\Repositories;

use App\Privilege;
use Ramsey\Uuid\Uuid;

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

    public function store($inputs)
    {
        $inputs['uuid'] = Uuid::uuid4();

        return Privilege::create($inputs);
    }

    public function destroy($privilege_id)
    {
        $privilege = Privilege::where('uuid', $privilege_id)->delete();
        return $privilege;
    }
}

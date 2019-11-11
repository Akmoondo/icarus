<?php

namespace App\Http\Controllers;

use App\Repositories\PrivilegeRepository;
use App\Repositories\RolesRepository;
use Illuminate\Http\Request;

class PrivilegesController extends Controller
{

    protected $rolesRepository;
    protected $privilegeRepository;

    public function __construct(RolesRepository $rolesRepository, PrivilegeRepository $privilegeRepository)
    {
        $this->privilegeRepository = $privilegeRepository;
        $this->rolesRepository = $rolesRepository;
    }

    public function index($role_uuid)
    {
        $roles = $this->rolesRepository->show($role_uuid);
        $privileges = $this->privilegeRepository->index();

        //dd($privileges);
        return view('roles.privileges.index', compact('privileges', 'roles'));
    }
}

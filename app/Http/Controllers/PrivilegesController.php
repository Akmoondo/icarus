<?php

namespace App\Http\Controllers;

use App\Repositories\PrivilegeRepository;
use App\Repositories\RolesRepository;
use App\Repositories\RolesPrivilegesRepository;
use Illuminate\Http\Request;

class PrivilegesController extends Controller
{

    protected $rolesRepository;
    protected $privilegeRepository;
    protected $rolesPrivilegesRepository;

    public function __construct(RolesRepository $rolesRepository, PrivilegeRepository $privilegeRepository, RolesPrivilegesRepository $rolesPrivilegesRepository)
    {
        $this->privilegeRepository = $privilegeRepository;
        $this->rolesRepository = $rolesRepository;
        $this->rolesPrivilegesRepository = $rolesPrivilegesRepository;
    }

    public function index($role_uuid)
    {
        $roles = $this->rolesRepository->show($role_uuid);
        $privileges = $this->privilegeRepository->index();

        //dd($privileges);
        return view('roles.privileges.index', compact('privileges', 'roles'));
    }

    public function create()
    {
        return view("roles.privileges.create");
    }

    public function saveRolesPrivileges($role_uuid, Request $request)
    {
        $inputs = $request['privilegios'];
        $this->rolesPrivilegesRepository->save($role_uuid, $inputs);
        return back();
    }

    public function store(Request $request)
    {
        // dd($request->all());

        try {
            $inputs = $request->except('_token');
            $this->privilegeRepository->store($inputs);
        } catch (Exeption $e) {
            $request->session()->flash('message', [
                'type' => 'error',
                'title' => 'Erro ao salvar Privilégio',
                'message' => 'Erro de conexão com o banco de dados'
            ]);
        }

        return back();
    }
}

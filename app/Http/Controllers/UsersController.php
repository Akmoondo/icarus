<?php

namespace App\Http\Controllers;
use App\Repositories\UsersRepository;
use App\Sector;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $usersRepository;
    
    public function __construct(UsersRepository $usersRepository)
    {
       $this->usersRepository = $usersRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $company_uuid, $sector_uuid)
    {
        $users = $this->usersRepository->index($sector_uuid);
        //dd($users);
        $sector = Sector::where('uuid', $sector_uuid)->first();
        $sector->load('companies');
        //dd($sector);
        return view('companies.sectors.users.index', compact('users', 'sector'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $company_uuid, $sector_uuid)
    {
        $sector = Sector::where('uuid', $sector_uuid)->first();
        $sector->load('companies');
        return view('companies.sectors.users.create', compact('sector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $company_uuid, $sector_uuid)
    {
        $inputs = $request->all();
        $users = $this->usersRepository->store($inputs, $company_uuid, $sector_uuid);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $company_uuid, $sector_uuid, $id )
    {
        $users = $this->usersRepository->show($id);
        //dd ($users);
        $sector = Sector::where('uuid', $sector_uuid)->first();
        $sector->load('companies');
        return view('companies.sectors.users.show', compact('users', 'sector'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $company_uuid, $sector_uuid, $id )
    {
        $users = $this->usersRepository->update($id, $request);
        return  back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($company_uuid, $sector_uuid, $id)
    {
        $users = $this->usersRepository->destroy($id);
        return back();
    }
}
 
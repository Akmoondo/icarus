<?php

namespace App\Http\Controllers;
use App\Repositories\UsersRepository;

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
        $users = $this->usersRepository->index($company_uuid, $sector_uuid);
        return view('companies.sectors.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_uuid, $sector_uuid)
    {
        return view('companies.sectors.users.create');
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
        return redirect()->route('companies.sectors.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($company_uuid, $sector_uuid, $id )
    {
        $users = $this->usersRepository->show($id);
        //dd ($users);
        return view('companies.sectors.users.show', compact('users'));
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
        return  redirect()->route('companies.sectors.users.index');
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
        return redirect()->route('companies.sectors.users.index');
    }
}
 
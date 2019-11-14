<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompaniesRepository;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    protected $companiesRepository;

    public function __construct(CompaniesRepository $companiesRepository)
    {
        $this->companiesRepository = $companiesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'empresa-list')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $companies = $this->companiesRepository->index();

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'empresa-create')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $companies = $this->companiesRepository->create();
        return view('companies.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'empresa-save')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $inputs = $request->all();
        $companies = $this->companiesRepository->store($inputs);
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'empresa-show')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $company = $this->companiesRepository->show($id);
        return view('companies.show', compact('company'));
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
    public function update(Request $request, $id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'empresa-update')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $companies = $this->companiesRepository->update($id, $request);
        return  redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'empresa-delete')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $companies = $this->companiesRepository->destroy($id);
        return redirect()->route('companies.index');
    }
}

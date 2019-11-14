<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ValidationsRepository;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class ValidationsController extends Controller
{
    protected $validationsRepository;

    public function __construct(ValidationsRepository $validationsRepository)
    {
        $this->validationsRepository = $validationsRepository;
    }

    public function index()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'validacao-list')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $validations = $this->validationsRepository->index();

        return view('audit.validations.index', compact('validations'));
    }


    public function create()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'validacao-create')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        return view('audit.validations.create');
    }


    public function store(Request $request)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'validacao-save')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $inputs = $request->all();
        $validations = $this->validationsRepository->store($inputs);
        return redirect()->route('audit.validations.index');
    }


    public function show($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'validacao-show')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $validations = $this->validationsRepository->show($id);
        return view('audit.validations.show', compact('validations'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'validacao-update')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $validations = $this->validationsRepository->update($id, $request);
        return  redirect()->route('audit.validations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'validacao-delete')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $validations = $this->validationsRepository->destroy($id);
        return redirect()->route('audit.validations.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SituationsRepository;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class SituationsController extends Controller
{
    protected $situationsRepository;

    public function __construct(SituationsRepository $situationsRepository)
    {
        $this->situationsRepository = $situationsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'situacao-list')) {
            dd('Você não tem permissão para realizar esta ação!');
        }

        $situations = $this->situationsRepository->index();

        return view('audit.situations.index', compact('situations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Gate::forUser(Auth::user())->denies('user-validate', 'situacao-create')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        return view('audit.situations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'situacao-save')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        //$situations = Situation::create($request->all());
        $inputs = $request->all();
        $situations = $this->situationsRepository->store($inputs);
        return redirect()->route('audit.situations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'situacao-show')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $situations = $this->situationsRepository->show($id);
        return view('audit.situations.show', compact('situations'));
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
        if (Gate::forUser(Auth::user())->denies('user-validate', 'situacao-update')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        /* $situations = Situation::where('uuid', $id)->update([
            'situation' => $request['situation'],
            'color' => $request['color'],
        ]); */

        $situations = $this->situationsRepository->update($id, $request);
        return  redirect()->route('audit.situations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::forUser(Auth::user())->denies('user-validate', 'situacao-delete')) {
            dd('Você não tem permissão para realizar esta ação!');
        }
        $situations = $this->situationsRepository->destroy($id);
        return redirect()->route('audit.situations.index');
    }
}

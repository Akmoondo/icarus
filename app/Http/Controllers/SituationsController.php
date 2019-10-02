<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SituationsRepository;


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
        $situations = $this->situationsRepository->index();

        return view('situations.index', compact('situations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $situations = $this->situationsRepository->create();
        return $situations;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$situations = Situation::create($request->all());
        $inputs = $request->all();
        $situations = $this->situationsRepository->store($inputs);
        return redirect()->route('situations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $situations = $this->situationsRepository->show($id);
        return $situations;
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
       /* $situations = Situation::where('uuid', $id)->update([
            'situation' => $request['situation'],
            'color' => $request['color'],
        ]); */

        $situations = $this->situationsRepository->update($id, $request);
        return  redirect()->route('situations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $situations = $this->situationsRepository->destroy($id);
        return redirect()->route('situations.index');
    }
}

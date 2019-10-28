<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ValidationsRepository;


class ValidationsController extends Controller
{
    protected $validationsRepository;
    
    public function __construct(ValidationsRepository $validationsRepository)
    {
       $this->validationsRepository = $validationsRepository;
    }
   
    public function index()
    {
        $validations = $this->validationsRepository->index();

        return view('audit.validations.index', compact('validations'));
    }

    
    public function create()
    {
        return view('audit.validations.create');
    }

   
    public function store(Request $request)
    {
        $inputs = $request->all();
        $validations = $this->validationsRepository->store($inputs);
        return redirect()->route('audit.validations.index');
    }

   
    public function show($id)
    {
        $validations = $this->validationsRepository->show($id);
        return view('audit.validations.show', compact('validations'));
    }

    
    public function edit($id)
    {
        //
    }
 
    
    public function update(Request $request, $id)
    {
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
        $validations = $this->validationsRepository->destroy($id);
        return redirect()->route('audit.validations.index');
    }
}

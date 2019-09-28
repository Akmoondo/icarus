@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Auditoria</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
           <div class="btn-group mr-2">
             <button type="button" class="btn btn-success">Conformidade</button>
             <button type="button" class="btn btn-warning">Pendente</button>
             <button type="button" class="btn btn-danger">Incoformidade</button>
           </div>
         </div>
       </div>
 
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
             <tr>
               <th>Requisito</th>
               <th>Artigo</th>
               <th>Responsável</th>
               <th>Situação</th>
             </tr>
           </thead>
           <tbody>
           @foreach($requisito->all() as $requisito) 
           <tr>
             <td><a href ="{{ route('requisito.show', $requisito->id)}}">{{$requisito->requisito}}</a></td>
               <td>{{$requisito->artigo}}</td>
               <td>{{$requisito->user->name}}</td>
               <td>{{}}</td>
            </tr>
            @endforeach 
           </tbody>
         </table>
       </div> 
     </main>
@endsection
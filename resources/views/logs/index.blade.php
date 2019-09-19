@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Registros</h1>
       <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group mr-2">
           <button type="button" class="btn btn-sm btn-outline-secondary" >Usuário</button>
           <button type="button" class="btn btn-sm btn-outline-secondary" >Ação</button>
           <button type="button" class="btn btn-sm btn-outline-secondary" >Data</button>
         </div>
       </div>
     </div>
     <div class="table-responsive">
       <table class="table table-striped table-sm">
         <thead>
           <tr>
             <th>Codígo de LOG</th>
             <th>Usuário</th>
             <th>Ação</th>
             <th>Time-Stamp</th>
           </tr>
         </thead>
         <tbody>
          @foreach($log->all() as $log) 
          <tr>
             <td>{{$log->id}}</td>
             <td>{{$log->user->name}}</td>
             <td>{{$log->registro}}</td>
             <td>{{$log->created_at}}</td>
           </tr>
          @endforeach
         </tbody>
       </table>
     </div> 
   </main>
@endsection
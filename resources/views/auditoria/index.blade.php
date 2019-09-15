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
               <th>Responsável</th>
               <th>Validade</th>
               <th>Situação</th>
             </tr>
           </thead>
           <tbody>
           @foreach($requisito->requisito as $requisito) 
            <tr>
             <td><a href ="">{{$requisito->requisito}}</a></td>
               <td>{{$requisito->user->name}}</td>
               <td>validade</td>
               <td>situacao</a></td>
            </tr>
            @endforeach
              <tr>
               <td><a href ="requisito.php">Art.48</a></td>
               <td>Maria</td>
               <td><a href ="#">psi.pdf</a></td>
               <td>11/11/19</td>
               <td><span data-feather="alert-triangle"></span><a href ="requisito.php">Pendente</a></td>
             </tr>
             <tr>
               <td><a href ="requisito.php">Art.48</a></td>
               <td>Jonas</td>
               <td><a href ="#">redes.pdf</a></td>
               <td>15/11/19</td>
               <td><span data-feather="alert-triangle"></span><a href ="requisito.php">Pendente</a></td>
             </tr>
             <tr>
               <td><a href ="requisito.php">Art.48<a></td>
               <td>Eduardo</td>
               <td><a href ="#">ca.pdf</a></td>
               <td>11/11/19</td>
               <td><span data-feather="x-circle"></span><a href ="requisito.php">Incomformidade</a></td>
             </tr>
           </tbody>
         </table>
       </div> 
     </main>
@endsection
@extends('layout.app')

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
           <tr>
             <td>001</td>
             <td>João</td>
             <td>Cadastraou uma evidência</td>
             <td>11/11/19 - STM 15:15</td>
           </tr>
            <tr>
             <td>002</td>
             <td>João</td>
             <td>Logout do sistema</td>
             <td>11/11/19 - STM 15:30</td>
           </tr>
           <tr>
             <td>003</td>
             <td>João</td>
             <td>Login no sistema</td>
             <td>11/11/19 - STM 15:12</td>
           </tr>
         </tbody>
       </table>
     </div> 
   </main>
@endsection
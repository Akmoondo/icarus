@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
         {{-- <button type="button" class="btn btn-sm btn-outline-secondary" onClick="window.location.href='relatorio.php'">Relatórios</button> --}}
        </div>
      </div>
    </div>
    
   <div class="alert alert-danger" role="alert">
      Aviso Urgente: Validade Expirada (<a href="Requisito.php">Art.48</a>)
  </div>
  
    
  <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="809" height="341" style="display: block; width: 809px; height: 341px;"></canvas>
  <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
    <h2>Evidências Pendentes</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Requisito</th>
            <th>Responsável</th>
            <th>Evidência</th>
            <th>Cadastro</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pendente->all() as $requisito)
          <tr>
            <td><a href ="{{ route('requisito.show', $requisito->id_requisito)}}">{{$requisito->id_requisito}}</a></td>
            <td>{{$requisito->user->name}}</td>
            <td>{{$requisito->evidencia}}</td>
            <td>{{$requisito->created_at}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div> 
  </main>
@endsection
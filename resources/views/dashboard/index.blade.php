@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button type="button" class="btn btn-sm btn-outline-secondary" onClick="window.location.href='relatorio.php'">Relatórios</button>
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
            <th>Validade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href ="requisito.php">Art.12</a></td>
            <td>João</td>
            <td><a href ="requisito.php">criptografia.pdf</a></td>
            <td>02/11/19</td>
          </tr>
           <tr>
            <td><a href ="requisito.php">Art.48</a></td>
            <td>Maria</td>
            <td><a href ="requisito.php">psi.pdf</a></td>
            <td>11/11/19</td>
          </tr>
          <tr>
            <td><a href ="requisito.php">Art.48</a></td>
            <td>Jonas</td>
            <td><a href ="requisito.php">redes.pdf</a></td>
            <td>15/11/19</td>
          </tr>
          <tr>
            <td><a href ="requisito.php">Art.48</a></td>
            <td>Eduardo</td>
            <td><a href ="requisito.php">ca.pdf</a></td>
            <td>11/11/19</td>
          </tr>
        </tbody>
      </table>
    </div> 
  </main>
@endsection
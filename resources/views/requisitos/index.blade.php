@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Requisito</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-primary" onClick="window.location.href='cadastra_REQ.php'">Cadastra Evidência</button>
              <button type="button" class="btn btn-success">Conformidade</button>
              <button type="button" class="btn btn-warning">Pendente</button>
              <button type="button" class="btn btn-danger">Incoformidade</button>
            </div>
          </div>
        </div>
  <div class="table-responsive">  
      <table class="table table-bordered">
    <tbody>
      <tr>
        <th scope="row">Requisito</th>
        <td> {{ $requisito->requisito }} </td>
      </tr>
      <tr>
        <th scope="row">Artigo</th>
        <td> {{ $requisito->artigo }} </td>
      </tr>
      <tr>
        <th scope="row">Responsável</th>
        <td> {{ $requisito->user->name }}</td>
      </tr>
       <tr>
        <th scope="row">Descrição</th>
        <td> {{ $requisito->descricao}}</td>
      </tr>
      <tr>
        <th scope="row">Relacionada</th>
        <td>{{$requisito->comparacao}}</td>
        </tr>
      <tr>
        <th scope="row">Evidência</th>
        <td> 
        </td>  
        
      </tr>
      <tr>
        <th scope="row">Cadastro</th>
        <td></td>
      </tr>
      <tr>
        <th scope="row">Validade</th>
        <td><form action="" method="post"> <input type="date" id="validade"> </form></td>
      </tr>
      <tr>
      <th scope="row">Situação</th>
        <td><span data-feather="check-square"></span>Em conformidade</td>
      </tr>
      
    </tbody>
  </table>
  </div>
        
      
          <h2>Comentário</h2>
          <div class="table-responsive">
              <table class="table table-striped table-sm">
              <thead>
              <tr>
                <th>Responsável</th>
                <th>Data</th>
                <th>Comentário</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>João</td>
                <td>11/11/19</td>
                <td>Cadastro de evidência atrasado devido a alteração no processo</td>
              </tr>
            </tbody>
          </table>
        </div>
  
        <h2>Hitórico do Requisito</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Situação</th>
                <th>Responsável</th>
                <th>Evidência</th>
                <th>Data</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span data-feather="check-square"></span><a href ="requisito.php">Conformidade</a></td>
                <td>João</td>
                <td><a href ="requisito.php">criptografia.pdf</a></td>
                <td>02/11/19</td>
              </tr>
               <tr>
                <td><span data-feather="alert-triangle"></span><a href ="requisito.php">Pendente</a></td>
                <td>Maria</td>
                <td><a href ="requisito.php">psi.pdf</a></td>
                <td>11/11/19</td>
              </tr>
              <tr>
                <td><span data-feather="x-circle"></span><a href ="requisito.php">Incomformidade</a></td>
                <td>Jonas</td>
                <td><a href ="requisito.php">redes.pdf</a></td>
                <td>15/11/19</td>
              </tr>
            </tbody>
          </table>
        </div> 
      </main>
    </div>
  </div>
@endsection
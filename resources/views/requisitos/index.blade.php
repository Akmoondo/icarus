@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Requisito {{$requisito->requisito}}</h1>
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
        <td> {{$requisito->requisito}} </td>
      </tr>
      <tr>
        <th scope="row">Artigo</th>
        <td> {{$requisito->artigo }} </td>
      </tr>
      <tr>
        <th scope="row">Responsável</th>
        <td> {{$requisito->user->name }}</td>
      </tr>
       <tr>
        <th scope="row">Descrição</th>
        <td> {{$requisito->descricao}}</td>
      </tr>
      <tr>
        <th scope="row">Relacionada</th>
        <td>{{$requisito->comparacao}}</td>
        </tr>
      <tr>
        <th scope="row">Evidência</th>
        <td>{{$evidencia->evidencia}}</td>  
      </tr>
      <tr>
        <th scope="row">Cadastro</th>
        <td>{{$evidencia->created_at}}</td>
      </tr>
      <tr>
        <th scope="row">Validade</th>
        <td>{{$evidencia->validade}} </form></td>
      </tr>
      <tr>
      <th scope="row">Situação</th>
        <td></td>
      </tr>
      
    </tbody>
  </table>
  </div>
        
      
          {{--<h2>Comentário</h2>
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
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>--}}
  
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
              @foreach ($evidencia->where($requisito->requisito) as $evidencia)
              <tr>
              <td>{{$evidencia->situacao}}</td>
                <td>{{$evidencia->user->name}}</td>
                <td>{{$evidencia->evidencia}}</a></td>
                <td>{{$evidencia->validade}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div> 
      </main>
    </div>
  </div>
@endsection
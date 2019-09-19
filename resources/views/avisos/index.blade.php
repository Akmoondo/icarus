@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Avisos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-success">Agendado</button>
			<button type="button" class="btn btn-warning">Atenção</button>
			<button type="button" class="btn btn-danger">Urgente</button>
          </div>
        </div>
      </div>
	  
	  <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
			  <th>Urgência</th>
              <th>Aviso</th>
			  <th>Data</th>
            </tr>
          </thead>
          <tbody>
            <tr>
			  <td><span data-feather="alert-triangle"></span>Atenção</td>
              <td>Evidências Vencida (Requisito Art.12)</td>
              <td>11/11/19</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
@endsection
@extends('layouts.app')

@section('content')
<div class="x_title">
        <h2>Adicionar Novo Setor</h2>
            <a class="btn btn-danger pull-right" href="#">Cancelar</a>
            <div class="clearfix"></div>
</div>
<<<<<<< HEAD
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{route('companies.sectors.store', $company->uuid)}}" >
    @csrf    
    @include('companies.sectors._form')
=======
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{route('companies.sectors.create', $company->uuid)}}" >
    @csrf

    @include('sectors._form')
>>>>>>> 0693d7f1d555ec1f1bf05144b5458bb5e764e3f0
    
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-warning" type="reset">Limpar</button>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
    </div> 
</form>
@endsection
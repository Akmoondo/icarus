@extends('layouts.app')

@section('content')
<div class="x_title">
        <h2>Adicionar Nova Referência</h2>
            <a class="btn btn-danger pull-right" href="{{ route('audit.references.index') }}">Cancelar</a>
            <div class="clearfix"></div>
</div>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{route('audit.references.store')}}" >
    @csrf
    
    @include('audit.references._form')
    
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-warning" type="reset">Limpar</button>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
    </div> 
</form>
@endsection
@extends('layouts.app')

@section('content')
<div class="x_title">
        <h2>Adicionar Novo Requisito</h2>
            <a class="btn btn-danger pull-right" href="{{ route('requirements.index') }}">Cancelar</a>
            <div class="clearfix"></div>
</div>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{route('requirements.store')}}" >
    @csrf
    <input type="hidden" id = "uuid" name="uuid" value="{{$requirements}}" >
    
    @include('requirements._form')
    
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-warning" type="reset">Limpar</button>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
    </div> 
</form>
@endsection
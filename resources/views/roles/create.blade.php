@extends('layouts.app')

@section('content')

<div class="x_title">
    <h2>Adicionar Novo Grupo de Usuário</h2>
    <a class="btn btn-danger pull-right" href="{{ route('roles.index') }}">Cancelar</a>
    <div class="clearfix"></div>
</div>
<form id="" class="form-horizontal form-label-left" novalidate="" method="POST" action="{{ route("roles.save") }}">
    @csrf

    @include('roles.form')

    <div class="form-group">
        <div class="col-md-6">
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
    </div>
</form>
@endsection
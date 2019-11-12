@extends('layouts.app')

@section('content')
<div class="x_title">
    <h2>Alterar Usuário: {{$users->name}}</h2>
        <a class="btn btn-danger pull-right" href="{{ redirect()->getUrlGenerator()->previous() }}">Cancelar</a>
        <div class="clearfix"></div>
</div>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{ route('companies.sectors.users.update', [$sector->companies->uuid, $sector->uuid, $users->uuid]) }}" > 
    @csrf
    <input name="_method" type="hidden" value="PUT">
    {{--@include('situations._form')--}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome do Usuário<span class="required"></span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{ $users->name }}" >
        </div>
    </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required"></span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{ $users->email }}" >
            </div>
        </div>
    
        <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nova senha</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="password" class="form-control" id="password" name="password" >
            </div>
        </div>
    <div class="ln_solid"></div>
    
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-warning" type="reset">Limpar</button>
            <button type="submit" class="btn btn-success">Alterar</button>
        </div>
    </div>
    
</form>
@endsection
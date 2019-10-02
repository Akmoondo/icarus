@extends('layouts.app')

@section('content')
<div class="x_title">
    <h2>Alterar Empresa: {{$company->name}}</h2>
        <a class="btn btn-danger pull-right" href="{{ route('companies.index') }}">Cancelar</a>
        <div class="clearfix"></div>
</div>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{ route('companies.update', $company->uuid) }}" > 
    @csrf
    <input name="_method" type="hidden" value="PUT">
    {{--@include('situations._form')--}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CNPJ<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="cnpj" name="cnpj" value="{{$company->cnpj}}" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  type="text" id="name" name="name" value="{{$company->name}}" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefone<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="telphone" name="telphone" value="{{$company->telphone}}" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-Mail<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="email" name="email" required="required" value="{{$company->email}}" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Responsável<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="sponsor" name="sponsor" required="required" value="{{$company->sponsor}}" class="form-control col-md-7 col-xs-12" >
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
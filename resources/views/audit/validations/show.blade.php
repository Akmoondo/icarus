@extends('layouts.app')

@section('content')
<div class="x_title">
    <h2>Alterar Validação: {{$validations->validation}}</h2>
        <a class="btn btn-danger pull-right" href="{{ redirect()->getUrlGenerator()->previous() }}">Cancelar</a>
        <div class="clearfix"></div>
</div>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{ route('audit.validations.update', $validations->uuid) }}" > 
    @csrf
    <input name="_method" type="hidden" value="PUT">
    {{--@include('situations._form')--}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Situação<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input  type="text" id="validation" name="validation" required="required" class="form-control col-md-7 col-xs-12" value="{{$validations->validation}}">
        </div>
    </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cor<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="color" name="color" required="required" class="form-control col-md-7 col-xs-12" value="{{$validations->color}}">
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
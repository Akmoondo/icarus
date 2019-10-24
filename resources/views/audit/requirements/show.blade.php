@extends('layouts.app')

@section('content')
<div class="x_title">
    <h2>Alterar Requisito: {{$requirements->clause}} - {{$requirements->requirement}}</h2>
        <a class="btn btn-danger pull-right" href="{{ route('audit.requirements.index', $requirements->uuid) }}">Cancelar</a>
        <div class="clearfix"></div>
</div>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{ route('audit.requirements.update', $requirements->uuid) }}" > 
    @csrf
    <input name="_method" type="hidden" value="PUT">
    {{--@include('situations._form')--}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Artigo/Controle<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input  type="text" id="clause" name="clause" required="required" class="form-control col-md-7 col-xs-12" value="{{$requirements->clause}}">
        </div>
    </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Requisito<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="requirement" name="requirement" required="required" class="form-control col-md-7 col-xs-12" value="{{$requirements->requirement}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descrição<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" maxlength="500" id="brief" name="brief" placeholder="{{$requirements->brief}}"></textarea>
            </div>
        </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Referência</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="reference_uuid" class="form-control">
                        @foreach ($references as $reference)
                    <option  id="reference_uuid" value="{{$reference->uuid}}" placeholder="{{$requirements->reference->reference}}">{{$reference->reference}}</option>
                        @endforeach 
                    </select>
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
@extends('layouts.app')

@section('content')
<div class="x_title">
    <h2>Nova Evidência</h2>
    <a class="btn btn-danger pull-right" href="{{route('evidences.index')}}">Cancelar</a>
    <div class="clearfix"></div>
</div>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method ="POST" action="{{route('evidences.store')}}" >
    @csrf
    <input type="hidden" id = "uuid" name="uuid" value="{{$evidences}}" >
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">

    <div class="col-md-12 col-sm-12 col-xs-12">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Comentário</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="resizable_textarea form-control" maxlength="255" id="comment" name="comment" placeholder="Insira um breve comentário"></textarea>
            </div>
    </div>
    </div>
    <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Evidência (Arquivo)<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file"  id="evidence" name="evidence" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
        </div>
    </div>
    <!-- Fim -->
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-warning" type="reset">Limpar</button>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
    </div>
</form>
@endsection
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
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Requisitos<span class="required">*</span></label>
        <div class="checkbox">
            <div class="col-md-9 col-sm-9 col-xs-12">
                @foreach ($requirements as $requirement)   
                <label class="">
                    <div class="icheckbox_flat-green" style="position: relative;">
                        <input type="checkbox" name="requirement_uuid" id="requirement_uuid" class="flat"  style="position: absolute; opacity: 0;">
                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            {{$requirement->requirement}}
                </label>
                @endforeach
            </div>
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
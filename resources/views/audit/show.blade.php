@extends('layouts.app')

@section('content')
<div class="x_title">
<h2>Requisito: {{$requirements->clause}} - {{$requirements->requirement}}</h2>

@can('user-validate', 'auditoria-edit')
<form class="text-right align-right" method ="POST" action="{{ route('audit.requirements.edit', $requirements->uuid) }}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <div class="col-md-3 col-sm-3 col-xs-2 text-right">
        <select name="situation_uuid" class="form-control">
            @foreach ($situations as $situation)
                <option value="{{$situation->uuid}}" {{ ($situation->uuid ==  $requirements->situation_uuid)? 'selected' : ''}}>{{$situation->situation}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-danger pull-right" >Salvar</button>
    <div class="clearfix"></div>
    </div>
</form>
@endcan

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Requisito</h2>
            @can('user-validate', 'requisito-show')
            <a class="btn btn-success pull-right" href="{{route('audit.requirements.show', $requirements->uuid)}}">Alterar Requisito</a>
            @endcan
            <div class="clearfix"></div>
        </div>
    <div class="x_content">
<div class="table-responsive">  
    <table class="table table-bordered">  
        <tbody>
            <tr>
                <th scope="row">Referência</th>
                <td>{{$requirements->reference->reference}}</td>  
            </tr>
            <tr>
                <th scope="row">Artigo/Capítulo</th>
                <td>{{$requirements->clause}}</td>  
            </tr>
            <tr>
                <th scope="row">Requisito</th>
                <td>{{$requirements->requirement}}</td>
            </tr>
            <tr>
                <th scope="row">Descrição</th>
                <td>{{$requirements->brief}}</td>
            </tr>
            <tr>
                <th scope="row">Situação</th>
                    <td>
                        @if($requirements->situation)
                            <span class="badge" style="background-color:{{ $requirements->situation->color }};"> {{ $requirements->situation->situation }}</span>
                        @endif
                    </td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
<div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Evidências</h2>
                <a class="btn btn-success pull-right" href="{{route('audit.requirements.evidences.create', $requirements->uuid)}}">Nova Evidência</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ( $evidences )
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome da Evidência</th>
                                <th class="text-center">Download da Evidência</th>                               
                                <th class="text-center">Situação</th>
                                <th class="text-center">Validação</th>
    
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($evidences as $evidence)
                                <tr>
                                    <td><a href="{{ route('audit.requirements.evidences.show', $evidence->uuid)}}"> {{ $evidence->name }} </a></td>
                                    <td class="text-center"><a class="btn btn-warning" href="{{ route('audit.requirements.evidences.download', $evidence->uuid)}}">Download</a></td>
                                    <td class="text-center">
                                        @if($evidence->validation)
                                            <span class="badge" style="background-color:{{ $evidence->validation->color }};"> {{ $evidence->validation->validation }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @can('user-validate', 'auditoria-edit')
                                        <form class="text-right align-right" method ="POST" action="{{ route('audit.requirements.editValidation', $evidence->uuid) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="PUT">
                                            <div class="col-md-7 col-sm-7 col-xs-4 text-right">
                                                <select name="validation_uuid" class="form-control">
                                                    @foreach ($validations as $validation)
                                                        <option value="{{$validation->uuid}}" {{ ($validation->uuid ==  $evidence->validation_uuid)? 'selected' : ''}}>{{$validation->validation}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-danger pull-right" >Salvar</button>
                                            <div class="clearfix"></div>
                                            </div>
                                        </form>
                                        @endcan
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">
                        <p>Não há nenhuma Evidência cadastrada!</p>
                    </div>
                @endif
            </div>
        </div>
    </div>




@endsection
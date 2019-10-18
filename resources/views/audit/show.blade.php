@extends('layouts.app')

@section('content')
<div class="x_title">
<h2>Requisito: {{$requirements->clause}} - {{$requirements->requirement}}</h2>
    <form class="text-right">
    <div class="col-md-3 col-sm-3 col-xs-2 text-right">
        <select class="form-control">
            @foreach ($situations as $situation)
                <option>{{$situation->situation}}</option>
            @endforeach
        </select>
    </div>
    <a class="btn btn-danger pull-right" href="{{route('audit.index')}}">Salvar</a>
    <form>
    <div class="clearfix"></div>
</div>

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Requisito</h2>
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
                <a class="btn btn-success pull-right" href="{{route('audit.requirements.evidences.create')}}">Nova Evidência</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ( $evidences )
                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome da Evidência</th>
                                <th class="text-center">Evidência</th>
                                <th class="text-right">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evidences as $evidence)
                                <tr>
                                    <td> {{ $evidence->name }}</td>
                                    <td class="text-center">{{ $evidence->evidence }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('audit.requirements.evidences.show', $evidence->uuid)}}"> <i class="fa fa-eye text-success"></i></a>
                                        <a href="{{ route('audit.requirements.evidences.destroy', $evidence->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
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
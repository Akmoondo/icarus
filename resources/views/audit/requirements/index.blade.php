@extends('layouts.app')
 
@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Requisitos</h2>
            <a class="btn btn-success pull-right" href="{{route('audit.requirements.create')}}">Novo Requisito</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $requirements )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Norma/Lei</th>
                            <th class="text-center">Capítulo/Artigo</th>
                            <th class="text-center">Requisito</th>
                            <th class="text-center"> Situação </th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requirements as $requirement)
                            <tr>
                                <td>{{($requirement->reference)? $requirement->reference->reference : ''}}</td>
                                <td class="text-center"> {{ $requirement->clause }}</td>
                                <td class="text-center"> {{ $requirement->requirement }}</td>
                                <td class="text-center">
                                    @if($requirement->situation)
                                        <span class="badge" style="background-color:{{ $requirement->situation->color }};"> {{ $requirement->situation->situation }}</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('audit.requirements.show', $requirement->uuid)}}"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="{{ route('audit.requirements.destroy', $requirement->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhum Requisito cadastrado!</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Setores: {{$company->name}}</h2>
            <a class="btn btn-success pull-right" href="{{ route('companies.sectors.create', $company->uuid) }}">Novo Setor</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $sectors )
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Setor</th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($sectors as $sector)
                                <tr>
                                    <td>{{ $sector->sector }}</td>
                                    <td class="text-right">
                                        <a href="{{-- route('companies.sectors.show', $company->uuid, $sector->uuid)--}}"> <i class="fa fa-edit text-success"></i></a>
                                        <a href="{{-- route('companies.sectors.destroy', $company->uuid, $sector->uuid)--}}"> <i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhum Setor cadastrado!</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Empresas</h2>
            <a class="btn btn-success pull-right" href="{{route('companies.create')}}">Nova Empresa</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $companies )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th class="text-center">Responsável</th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td> {{ $company->name }}</td>
                                <td class="text-center"> {{ $company->sponsor }}</td>
                                <td class="text-right">
                                    <a href="{{ route('companies.sectors.index', $company->uuid)}}"><i class="fa fa-gear text-primary"></i></a>
                                    <a href="{{ route('companies.show', $company->uuid)}}"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="{{ route('companies.destroy', $company->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhuma Empresa cadastrada!</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
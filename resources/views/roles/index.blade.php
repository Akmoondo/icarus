@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-align-left"></i> Lista de Funções</h2>
            <a href="{{ route('roles.create') }}" class="btn btn-success pull-right">Nova Função</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $roles )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Função</th>
                            <th class="text-center">Privilegios</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td> {{ $role->name }}</td>
                                <td class="text-center"> {{ count($role->privileges) }}</td>
                                <td class="text-right">
                                    <a href="{{ route('privileges.index', $role->uuid) }}"> <i class="fa fa-gear text-primary"></i></a>
                                    <a href="{{ route('roles.show', $role->uuid) }}"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="{{ route('roles.destroy', $role->uuid) }}"> <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhuma função cadastrada!</p>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
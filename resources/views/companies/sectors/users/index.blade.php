@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Usuário</h2>
            <a class="btn btn-success pull-right" href="{{ route('companies.sectors.users.create', [$sector->companies->uuid, $sector->uuid]) }}">Novo Usuário</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $users )
             
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th class="text-center">Função</th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->name }}</td>
                                <td class="text-center">Função</td>
                                <td class="text-right">
                                    <a href="{{ route('companies.sectors.users.show',[$sector->companies->uuid, $sector->uuid, $user->uuid])}}"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="{{ route('companies.sectors.users.destroy', [$sector->companies->uuid, $sector->uuid, $user->uuid])}}"> <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhum Usuário cadastrado!</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
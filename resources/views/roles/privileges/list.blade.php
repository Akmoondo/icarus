@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-align-left"></i> Lista de Privilégios</h2>
            <a class="btn btn-success pull-right">Novo Privilégio</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $roles )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Privilégio</th>
                            <th class="text-center">Privilégios</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($privileges as $privilege)
                            <tr>
                                <td> {{ $privilege->name }}</td>
                                <td class="text-center"> {{ count( $privilege->slug) }}</td>
                                <td class="text-right">
                                    <a href="edit"> <i class="fa fa-gear text-primary"></i></a>
                                    <a href="edit"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="edit"> <i class="fa fa-trash text-danger"></i></a>
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
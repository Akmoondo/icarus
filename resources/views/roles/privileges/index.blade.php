@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2><i class="fa fa-align-left"></i> Adiciona Privilério a {{ $roles->name }}</h2>
            <a href="{{ route('privileges.create')}}" class="btn btn-success pull-right">Novo Privilégio</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $roles )

            <form id="adiciona-privilegio-grupo" action="{{ route('roles.privileges.save', $roles->uuid )}}" method="post">
                @csrf
                <input type="hidden" name="role_uuid" value="{{ $roles->uuid }}" />
                <table class="table table-striped">
                    <thead>
                        
                    </thead>
                    <tbody>
                        @foreach($privileges as $privilege)
                            <tr>
                                <td> 
                                <input id="{{ $privilege->slug }}" type="checkbox" name="privilegios[]" value="{{  $privilege->uuid }}" />
                                    <label for="{{ $privilege->slug }}"> {{ $privilege->name }}</label>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    
                </table>
                <button class="btn btn-success">Salvar</button>
                </form>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhuma função cadastrada!</p>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Validações de Evidências</h2>
            <a class="btn btn-success pull-right" href="{{route('audit.validations.create')}}">Nova Validação</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $validations )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Validações</th>
                            <th class="text-center">Cor</th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($validations as $validation)
                            <tr>
                                <td> {{ $validation->validation }}</td>
                                <td class="text-center"> {{ $validation->color }}</td>
                                <td class="text-right">
                                    <a href="{{ route('audit.validations.show', $validation->uuid)}}"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="{{ route('audit.validations.destroy', $validation->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhuma Validação cadastrada!</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
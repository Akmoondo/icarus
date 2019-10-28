@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Situações</h2>
            <a class="btn btn-success pull-right" href="{{route('audit.situations.create')}}">Nova Situação</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $situations )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Situações</th>
                            <th class="text-center">Cor</th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($situations as $situation)
                            <tr>
                                <td> {{ $situation->situation }}</td>
                                <td class="text-center"> {{ $situation->color }}</td>
                                <td class="text-right">
                                    <a href="{{ route('audit.situations.show', $situation->uuid)}}"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="{{ route('audit.situations.destroy', $situation->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhuma Situação cadastrada!</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Evidências</h2>
            <a class="btn btn-success pull-right" href="{{route('evidences.create')}}">Nova Evidência</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $evidences )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome da Evidência</th>
                            <th class="text-center">Evidências</th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($evidences as $evidence)
                            <tr>
                                <td> {{ $evidence->name }}</td>
                                <td class="text-center">{{ $evidence->evidence }}</td>
                                <td class="text-right">
                                    <a href="{{ route('evidences.show', $evidence->uuid)}}"> <i class="fa fa-eye text-success"></i></a>
                                    <a href="{{ route('evidences.destroy', $evidence->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
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
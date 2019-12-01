@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Referências</h2>
            @can('user-validate', 'referencia-create')
            <a class="btn btn-success pull-right" href="{{route('references.create')}}">Nova Referência</a>
            @endcan
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ( $references )
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Referências</th>
                            <th class="text-right">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($references as $reference)
                            <tr>
                                <td> {{ $reference->reference }}</td>
                                <td class="text-right">
                                    @can('user-validate', 'referencia-show')
                                    <a href="{{ route('references.show', $reference->uuid)}}"> <i class="fa fa-edit text-success"></i></a>
                                    @endcan
                                    @can('user-validate', 'referencia-delete')
                                    <a href="{{ route('references.destroy', $reference->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger">
                    <p>Não há nenhuma Referência cadastrada!</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
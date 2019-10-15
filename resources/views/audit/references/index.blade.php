@extends('layouts.app')

@section('content')

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Referências</h2>
            <a class="btn btn-success pull-right" href="{{route('audit.references.create')}}">Nova Referência</a>
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
                                    <a href="{{ route('audit.references.show', $reference->uuid)}}"> <i class="fa fa-edit text-success"></i></a>
                                    <a href="{{ route('audit.references.destroy', $reference->uuid)}}"> <i class="fa fa-trash text-danger"></i></a>
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
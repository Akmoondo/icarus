@extends('layouts.app')

@section('content')
<div class="x_title">
<h2>Evidência: {{$evidence->name}}</h2>
    <a class="btn btn-danger pull-right" href="{{ redirect()->getUrlGenerator()->previous() }}">Voltar</a>
    <div class="clearfix"></div>
</div>

<div class="table-responsive">  
    <table class="table table-bordered">  
        <tbody>
            <tr>
                <th scope="row">Nome</th>
                <td>{{$evidence->name}}</td>  
            </tr>
            <tr>
                <th scope="row">Evidência</th>
                <td>{{$evidence->evidence}}</td>  
            </tr>
            <tr>
                <th scope="row">Comentário</th>
                <td>{{ $evidence->comment }} </td>
            </tr>
            <tr>
                    <th scope="row">Cadastro</th>
                    <td>{{$evidence->created_at}}</td>
            </tr>
            <tr>
                    <th scope="row">Última Avaliação</th>
                    <td>{{$evidence->updated_at}}</td>
            </tr>
            <tr>
                <th scope="row">Situação</th>
                <td> 
                    @if($evidence->validation)
                        <span class="badge" style="background-color:{{ $evidence->validation->color }};"> {{ $evidence->validation->validation }}</span>
                    @endif 
                </td>
            </tr>

        </tbody>
    </table>
</div>
<div class="ln_solid"></div>
    <a class="btn btn-danger pull-right" href="{{ route('audit.requirements.evidences.destroy', $evidence->uuid)}}">Apagar Evidência</a>
@endsection
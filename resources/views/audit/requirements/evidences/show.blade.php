@extends('layouts.app')

@section('content')
<div class="x_title">
<h2>Evidência: {{$evidence->name}}</h2>
    <a class="btn btn-danger pull-right" href="{{route('audit.index')}}">Voltar</a>
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
                <th scope="row">Cadastro</th>
                <td>{{$evidence->created_at}}</td>
            </tr>
            <tr>
                <th scope="row">Comentário</th>
                <td>{{$evidence->comment}} </form></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
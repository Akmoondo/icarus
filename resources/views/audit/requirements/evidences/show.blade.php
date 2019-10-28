@extends('layouts.app')

@section('content')
<div class="x_title">
<h2>Evidência: {{$evidence->name}}</h2>
    <a class="btn btn-danger pull-right" href="{{ redirect()->getUrlGenerator()->previous() }}">Voltar</a>
    <div class="clearfix"></div>
</div>

<form class="text-right align-right" method ="POST" action="{{-- route('audit.requirements.evidences.edit', $evidences->uuid) --}}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <div class="col-md-3 col-sm-3 col-xs-2 text-right">
        <select name="validation_uuid" class="form-control">
            @foreach ($validations as $validation)
                <option value="{{$validation->uuid}}" {{ ($validation->uuid ==  $evidences->validation_uuid)? 'selected' : ''}}>{{$validation->validation}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-danger pull-right" >Salvar</button>
    <div class="clearfix"></div>
    </div>
</form>

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
                <td>{{ $evidence->comment }} </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
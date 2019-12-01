@extends('layouts.app')

@section('content')
    
<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2><i class="fa fa-align-left"></i>Criação de Privilégios</h2>
            {{-- <a class="btn btn-success pull-right">Novo Privilégio</a> --}}
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form id="create-screen" action="{{ route('privileges.store') }}" method="post" >
                @csrf
                @include('roles.privileges.form')
                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Gravar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
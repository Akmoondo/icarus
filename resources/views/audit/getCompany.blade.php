@extends('layouts.app')

@section('content')
@foreach ($companies as $company)
<div class="col-md-12 col-sm-10 col-xs-15">
    <div class="x_panel tile fixed_height_160 overflow_hidden">
    <div class="x_title">
    <h2>{{$company->name}}</h2>
    <ul class="nav navbar-right panel_toolbox">
    <li class="">
    <a href="{{route('audit.getSector', $company->uuid)}}"  role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
    </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="table-responsive">  
        <table class="table table-bordered">  
            <tbody>
                <tr>
                    <th scope="row">Responsável</th>
                    <td>{{$company->sponsor}}</td>  
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{$company->email}}</td>  
                </tr>
                <tr>
                    <th scope="row">Telefone</th>
                    <td>{{ $company->telphone }} </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
    <br/>

    @endforeach
@endsection
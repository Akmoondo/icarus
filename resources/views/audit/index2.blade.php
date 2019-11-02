@extends('layouts.app')

@section('content')
@foreach ($companies as $company)
<div class="col-md-12 col-sm-12 col-xs-30">
    <div class="x_panel tile fixed_height_320 overflow_hidden">
    <div class="x_title">
    <h2>{{$company->name}}</h2>
    <ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
    </li>
    <li class="">
    <a href="{{route('audit.audit', $company->uuid)}}"  role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
    </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <table class="" style="width:100%">
    <tbody><tr>
    <th style="width:37%;">
    <p>Gráfico</p>
    </th>
    <th>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
    <p class="">Situação</p>
    </div>
    <div class="pull-right">
    <p class="">Conformidade</p>
    </div>
    </th>
    </tr>
    <tr>
    <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
    <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
    </td>
    <td>
    <table class="tile_info">
    <tbody>
    @foreach ($situations as $situation)
        <tr>
            <td>
            <p><i class="fa fa-square {{$situation->color}}"></i>{{$situation->situation}}</p>
            </td>
            <td>Contar Requisitos</td>
        </tr> 
    @endforeach
    
    </tbody></table>
    </td>
    </tr>
    </tbody></table>
    </div>
    </div>
    </div>
    <br/>

    @endforeach
@endsection
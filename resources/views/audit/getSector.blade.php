@extends('layouts.app')

@section('content')
@foreach ($sectors as $sector)
<div class="col-md-12 col-sm-8 col-xs-30">
    <div class="x_panel tile fixed_height_100 overflow_hidden">
    <div class="x_title">
    <h2>{{$sector->sector}}</h2>
    <ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
    </li>
    <li class="">
    <a href="{{route('audit.audit', [$company->uuid, $sector->uuid])}}"  role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
    </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: block;">
            <div class="widget_summary">
            <div class="w_left w_25">
            <span>0.1.5.2</span>
            </div>
            <div class="w_center w_55">
            <div class="progress">
            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 4%;">
            <span class="sr-only">60% Complete</span>
            </div>
            </div>
            </div>
            <div class="clearfix"></div>
            </div>
    </div>

    </div>
    </div>
    
    <br/>

    @endforeach
@endsection
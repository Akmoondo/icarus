@extends('layouts.app')

@section('content')
@foreach ($sectors as $sector)
<div class="col-md-12 col-sm-8 col-xs-30">
    <div class="x_panel tile fixed_height_100 overflow_hidden">
    <div class="x_title">
    <h2>{{$sector->sector}}</h2>
    <ul class="nav navbar-right panel_toolbox">
    
    <li class="">
    <a href="{{route('audit.audit', [$company->uuid, $sector->uuid])}}"  role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
    </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    </div>
    </div>
    
    <br/>

    @endforeach
@endsection
@extends('layouts.master')

@section('title')
<title>Educacion|Inicio</title>
@stop

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Seleccione su grupo
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="col-md-6 col-sm-6 col-xs-12 inicio">
                            <a href="grupos">
                                <div>
                                    <h1>1-A</h1>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 inicio" style="float: right;">
                            <a href="grupos">
                                <div>
                                    <h1>1-B</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
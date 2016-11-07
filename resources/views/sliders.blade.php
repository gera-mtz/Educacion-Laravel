@extends('layouts.master')

@section('resources')
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
@stop

@section('title')
<title>Educacion|Sliders</title>
@stop

@section('content')
<script>
document.getElementById("perfil").classList.remove('active');
document.getElementById("grupos").classList.remove('active');
document.getElementById("tareascal").classList.remove('active');
document.getElementById("notas").classList.remove('active');
document.getElementById("agenda").classList.remove('active');
document.getElementById("sliders").classList.add('active');
document.getElementById("reportes").classList.remove('active');
</script>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Sliders
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- page content -->

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Alumnos</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tutores</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="row">
                                            <div class="profile_img">
                                                <div id="crop-avatar">
                                                    <img class="img-responsive" src="{{URL::asset('img/imagenlimite.svg')}}" alt="Avatar" title="Change the avatar" style="width: 100%; height: 300px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center; padding-top: 20px;">
                                            <div class="col-left" style="display: inline-block;">
                                                <a href="#" class="btn btn-primary">Cargar elemento</a>
                                            </div>
                                            <div class="col-right" style="display: inline-block;">
                                                <a href="#" class="btn btn-success">Aceptar</a>
                                                <a href="#" class="btn btn-warning">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="row">
                                            <div class="profile_img">
                                                <div id="crop-avatar">
                                                    <img class="img-responsive" src="{{URL::asset('img/imagenlimite.svg')}}" alt="Avatar" title="Change the avatar" style="width: 100%; height: 300px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center; padding-top: 20px;">
                                            <div class="col-left" style="display: inline-block;">
                                                <a href="#" class="btn btn-primary">Cargar elemento</a>
                                            </div>
                                            <div class="col-right" style="display: inline-block;">
                                                <a href="#" class="btn btn-success">Aceptar</a>
                                                <a href="#" class="btn btn-warning">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <img class="img-responsive" src="{{URL::asset('img/imagenlimite.svg')}}" alt="Avatar" title="Change the avatar" style="width: 100%; height: 300px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding-top: 20px;">
                                <div class="col-left" style="display: inline-block;">
                                    <a href="#" class="btn btn-primary">Cargar elemento</a>
                                </div>
                                <div class="col-right" style="display: inline-block;">
                                    <a href="#" class="btn btn-success">Aceptar</a>
                                    <a href="#" class="btn btn-warning">Cancelar</a>
                                </div>
                            </div>
                        </div> --}}

                        <!-- !page content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
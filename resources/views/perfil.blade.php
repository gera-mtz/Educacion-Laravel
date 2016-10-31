@extends('layouts.master')
@section('content')
<script>
document.getElementById("perfil").classList.add('active');
document.getElementById("grupos").classList.remove('active');
document.getElementById("tareascal").classList.remove('active');
document.getElementById("notas").classList.remove('active');
document.getElementById("agenda").classList.remove('active');
document.getElementById("sliders").classList.remove('active');
document.getElementById("reportes").classList.remove('active');
</script>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                Perfil
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- page content -->
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="{{URL::asset('images/picture.jpg')}}" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="form-horizontal form-label-left" >
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Apellido Paterno
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="appaterno" class="form-control col-md-7 col-xs-12" name="appaterno" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Apellido Materno
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="apmaterno" name="apmaterno" class="form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >
                                        Nombre
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="nombre" name="nombre" class="form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >
                                        CURP
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="curp" name="curp" class="form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >
                                        Genero
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div id="genero" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="genero" value="Hombre"> Hombre
                                        </label>
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="genero" value="Mujer"> Mujer
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Fecha de nacimiento
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="date">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-xs-12 col-lg-6 col-lg-offset-3">
                                        <button id="send" class="btn btn-primary"><a href="cambiarpwd">Cambiar Contraseña</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- !page content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@extends('layouts.master')

@section('title')
<title>Educacion|Reportes</title>
@stop

@section('resources')
<link href= "{{URL::asset('css/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
@stop

@section('content')
<script>
document.getElementById("perfil").classList.remove('active');
document.getElementById("grupos").classList.remove('active');
document.getElementById("tareascal").classList.remove('active');
document.getElementById("notas").classList.remove('active');
document.getElementById("agenda").classList.remove('active');
document.getElementById("sliders").classList.remove('active');
document.getElementById("reportes").classList.add('active');
</script>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                Reportes
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
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Actividades</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Actividad Alumno</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Kardex</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tutores</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <!--Primer panel-->
                                    <div class="x_panel x_title content" style="margin-top: 10px;">
                                        <div class="col-md-2">
                                            Selecciona grupo:
                                            <div id="cambiogrupo" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="1-A"> 1-A
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="1-B"> 1-B
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            Tipo de Actividad:
                                            <div id="cambiogrupo" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="tarea"> Tarea
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="practica"> Practica
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            Rango de fechas para actividades asignadas
                                            <form class="form-horizontal">
                                              <fieldset>
                                                    <div class="input-prepend input-group">
                                                      <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                      <input type="text" style="width: 80%;" name="reservation" id="reservation" class="form-control" value="" />
                                                    </div>
                                              </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="x_content">
                                        
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                <!--Segundo panel-->
                                    <div class="x_panel x_title content" style="margin-top: 10px;">
                                        <div class="col-md-2">
                                            Selecciona grupo:
                                            <div id="cambiogrupo" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="1-A"> 1-A
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="1-B"> 1-B
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            Tipo de Actividad:
                                            <div id="cambiogrupo" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="tarea"> Tarea
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="practica"> Practica
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            Tipo de Estatus:
                                            <div id="cambiogrupo" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="progreso"> En progreso
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="completa"> Completa
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="pendiente"> Pendiente
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            Rango de fechas para actividades asignadas
                                            <form class="form-horizontal">
                                              <fieldset>
                                                    <div class="input-prepend input-group">
                                                      <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                      <input type="text" style="width: 80%;" name="reservation" id="reservation" class="form-control" value="" />
                                                    </div>
                                              </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="x_content">
                                        
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                <!--Tercer panel-->
                                    <div style="margin-top: 10px;">
                                        <div class="col-md-2 col-md-offset-2">
                                            Selecciona grupo:
                                            <div id="cambiogrupo" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="1-A"> 1-A
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="grupo" value="1-B"> 1-B
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-md-offset-2">
                                            Buscar:
                                            <input aria-controls="datatable" placeholder="" class="form-control" type="search">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-3 col-md-offset-2">
                                            <img class="img-responsive avatar-view" src="images/user.png" alt="Avatar" title="Change the avatar" />
                                        </div>
                                        <div class="col-md-5">
                                            <h2>Apellido Paterno:</h2>
                                            <h2>Apellido Materno:</h2>
                                            <h2>Nombre:</h2>
                                            <h2>Genero:</h2>
                                            <h2>Fecha de nacimiento:</h2>
                                            <h2>Grado y Seccion:</h2>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                <!--Cuarto panel-->
                                    <div class="x_panel x_title content">
                                    </div>
                                    <div class="x_content"></div>
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

@section('scripts')
<script src="{{URL::asset('js/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('js/datepicker/daterangepicker.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#reservation').daterangepicker({
        locale: {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Aceptar",
            "cancelLabel": "Cancelar",
            "customRangeLabel": "Personalizar",
            "daysOfWeek": [
                "Dom",
                "Lun",
                "Mar",
                "Mie",
                "Jue",
                "Vie",
                "Sab"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agusto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1
        }
    });
  });
</script>
@stop
@extends('layouts.master')
@section('content')
<script>
document.getElementById("perfil").classList.remove('active');
document.getElementById("grupos").classList.remove('active');
document.getElementById("tareascal").classList.add('active');
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
                	Tareas - Practicas
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
						<!-- page content -->
						<div class="x_panel x_title content">
							<div class="col-left">
								<h2>Grupo: </h2>
								<div id="cambiogrupo" class="btn-group" data-toggle="buttons">
	                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                                	<input type="radio" name="grupo" value="1-A"> 1-A
	                                </label>
	                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                                 	<input type="radio" name="grupo" value="1-B"> 1-B
	                                </label>
	                            </div>
							</div>
							<div class="col-right">
								<h2>Selecciona tipo de actividad: </h2>
	                            <div id="cambioact" class="btn-group" data-toggle="buttons">
	                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                                	<input type="radio" name="grupo" value="actividad"> Practica
	                                </label>
	                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	                                 	<input type="radio" name="grupo" value="tarea"> Tarea
	                                </label>
	                            </div>
							</div>
						</div>
						<div class="x_content">
							<!-- start project list -->
							<div class="titulo_tabla col-xs-12 col-md-6 col-md-offset-3">
								<p>Lista de Practicas del 1-A</p>
							</div>
							<table class="table table-striped projects">
								<thead>
									<tr>
										<th class="col-md-3">Titulo</th>
										<th>Fecha</th>
										<th>Estado</th>
										<th>Opciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Actividad 1</td>
										<td>17/10/2016</td>
										<td>
											<button type="button" class="btn btn-warning btn-det">Pendiente</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Programar</a>
										</td>
									</tr>
									<tr>
										<td>Actividad 2</td>
										<td>17/10/2016</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Programado</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Re-Programar</a>
											<a href="#" class="btn btn-danger btn-xs btn-det"><i class="fa fa-pencil"></i> Enviar</a>
										</td>
									</tr>
									<tr>
										<td>Actividad 3</td>
										<td>17/10/2016</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Programado</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Re-Programar</a>
											<a href="#" class="btn btn-danger btn-xs btn-det"><i class="fa fa-pencil"></i> Enviar</a>
										</td>
									</tr>
								</tbody>
							</table>
						<!-- end project list -->
						<!-- !page content -->
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
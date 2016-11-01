@extends('layouts.master')

@section('title')
<title>Educacion|Grupos</title>
@stop


@section('content')
<script>
document.getElementById("perfil").classList.remove('active');
document.getElementById("grupos").classList.add('active');
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
                	Grupos
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
						<div class="x_content">
							<!-- start project list -->
							<div class="titulo_tabla col-xs-12 col-md-6 col-md-offset-3">
								<p>Lista de calificaciones</p>
							</div>
							<table class="table table-striped projects">
								<thead>
									<tr>
										<th class="col-md-2">Numero de Control</th>
										<th>Foto</th>
										<th style="width: 20%">Nombre, Datos</th>
										<th>Calificacion Final</th>
										<th>Calificacion Actividades</th>
										<th style="width: 20%">Asistencia</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>10235</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Juan Perez Lopez</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="56" style="width: 57%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
											</div>
											<small>57%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10236</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Martin Lazaro Sifuentes</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="45" style="width: 47%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="47"></div>
											</div>
											<small>47%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10237</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Ines Maria Cruz Esparza</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="75" style="width: 77%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
											</div>
											<small>77%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10238</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Nayelly Rios Arroyo</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="58" style="width: 60%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
											</div>
											<small>60%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10239</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Andres Garcia Garay</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="10" style="width: 12%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="12"></div>
											</div>
											<small>12%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10240</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Juan Manuel Rodriguez Garza</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="33" style="width: 35%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="35"></div>
											</div>
											<small>35%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10241</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Elena Marquez Gutierrez</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="85" style="width: 87%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="87"></div>
											</div>
											<small>87%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10242</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Maria Angeles Alvarez Hernandez</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="75" style="width: 77%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
											</div>
											<small>77%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
										</td>
									</tr>
									<tr>
										<td>10243</td>
										<td>
											<ul class="list-inline">
												<li>
													<img src="images/user.png" class="avatar" alt="Avatar">
												</li>
											</ul>
										</td>
										<td>Ruben Soto Landa</td>
										<td class="project_progress">
											<div class="progress progress_sm">
												<div aria-valuenow="75" style="width: 77%;" class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
											</div>
											<small>77%</small>
										</td>
										<td>
											<button type="button" class="btn btn-success btn-det">Ver</button>
										</td>
										<td>
											<a href="#" class="btn btn-info btn-xs btn-det"><i class="fa fa-pencil"></i> Modificar</a>
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
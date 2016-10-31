@extends('layouts.master')
@section('content')
<script>
document.getElementById("perfil").classList.remove('active');
document.getElementById("grupos").classList.remove('active');
document.getElementById("tareascal").classList.remove('active');
document.getElementById("notas").classList.add('active');
document.getElementById("agenda").classList.remove('active');
document.getElementById("sliders").classList.remove('active');
document.getElementById("reportes").classList.remove('active');
</script>

<div class="right_col" role="main">
	<div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                	Recomendaciones / Notas / Practicas
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
	                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
	                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
	                        <li role="presentation" class="active"><a href="#tab_content1" id="notas-tab" role="tab" data-toggle="tab" aria-expanded="false">Notas</a>
	                        </li>
	                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="h-notas-tab" data-toggle="tab" aria-expanded="false">Historial de notas</a>
	                        </li>
	                      </ul>
	                      <div id="myTabContent" class="tab-content">
	                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="notas-tab">
	                        	<div class="col-md-12 col-sm-12 col-xs-12">
					                <div class="x_panel">
					                    <div class="x_content">
											<div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="x_title content contenidonotas">
														<h2>Tipo de nota: </h2>
														<div id="tiponota" class="btn-group" data-toggle="buttons">
							                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                	<input type="radio" name="grupo" value="notas"> Notas
							                                </label>
							                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                 	<input type="radio" name="grupo" value="tips"> Tips
							                                </label>
							                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                 	<input type="radio" name="grupo" value="recomendaciones">Recomendaciones
							                                </label>
							                            </div>
							                            <br/>
														<h2>La nota es: </h2>
														<div id="direccionnota" class="btn-group" data-toggle="buttons">
							                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                	<input type="radio" name="grupo" value="grupal"> Grupal
							                                </label>
							                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                 	<input type="radio" name="grupo" value="personalizada"> Personalizada
							                                </label>
							                            </div>
							                            <br/>
														<h2>Grupo: </h2>
														<div id="direccionnota" class="btn-group" data-toggle="buttons">
							                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                	<input type="radio" name="grupo" value="1-A"> 1-A
							                                </label>
							                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                 	<input type="radio" name="grupo" value="1-B"> 1-B
							                                </label>
							                            </div>
							                            <br/>
							                            <h2>Titulo: </h2>
					                                    <input id="titulo" name="titulo" class="btn-group form-control" type="text">
					                                    <br/>
					                                    <h2>Descripcion: </h2>
					                                    <textarea class="form-control btn-group" rows="3"></textarea>
							                        </div>
												</div>
												<div class="col-md-6 col-xs-12">
													<div class="x_title content contenidonotas">
														<h2>Recursos</h2>
														<br/>
														<div class="col-md-12">
															<a href="addrec" class="btn btn-primary col-md-5">Agregar Recurso</a>
															<a href="obtrec" class="btn btn-primary col-md-6">Seleccionar Recurso</a>
														</div>
													</div>
													<div>
														<div class="profile_img">
							                                <div id="crop-avatar">
							                                    <!-- Current avatar -->
							                                    <img class="img-responsive avatar-view" src="{{URL::asset('images/user.png')}}" alt="Avatar" title="Change the avatar">
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
											<br>
											<div class="row">
												<a href="limpiar" class="btn btn-warning btn-notas">Limpiar</a>
												<a href="enviar" class="btn btn-danger btn-notas">Enviar</a>
											</div>
										</div>
					                </div>
					            </div>
	                        </div>
	                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="h-notas-tab">
	                          	<div class="col-md-12 col-sm-12 col-xs-12">
					                <div class="x_panel">
					                    <div class="x_content">
											<div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="x_title content contenidonotas">
														<h2>Grupo: </h2>
														<div id="direccionnota" class="btn-group" data-toggle="buttons">
							                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                	<input type="radio" name="grupo" value="1-A"> 1-A
							                                </label>
							                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                 	<input type="radio" name="grupo" value="1-B"> 1-B
							                                </label>
							                            </div>
							                            <br/>
														<h2>Tipo de nota: </h2>
														<div id="tiponota" class="btn-group" data-toggle="buttons">
							                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                	<input type="radio" name="grupo" value="notas"> Notas
							                                </label>
							                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                 	<input type="radio" name="grupo" value="tips"> Tips
							                                </label>
							                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							                                 	<input type="radio" name="grupo" value="recomendaciones">Recomendaciones
							                                </label>
							                            </div>
							                            <br/>
														<h2>La nota debe ser: </h2>
														<div id="direccionnota" class="btn-group" data-toggle="buttons">
															<div class="checkbox">
																<label class="">
																	<div style="position: relative; font-size: 10px;" class="icheckbox_flat-green">
																		<input style="position: absolute; opacity: 0;" class="flat" checked="checked" type="checkbox">
																		<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper">
																		</ins>
																	</div> 
																	Grupal
																</label>
															</div>
															<div class="checkbox">
																<label class="">
																  	<div style="position: relative; font-size: 10px;" class="icheckbox_flat-green">
																  		<input style="position: absolute; opacity: 0;" class="flat" type="checkbox">
																	  	<ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper">
																	  	</ins>
																  	</div> 
																  	Personalizada
																</label>
															</div>
							                            </div>
							                        	<br>
						                        		<h2>Buscar por nombre</h2>
						                        		<div class="col-sm-8 col-xs-12">
						                        			<input id="buscar" name="buscar" class="btn-group form-control" type="text">
						                        		</div>
						                        		<div class="clearfix"></div>
							                        </div>
							                        <div class="clearfix"></div>
												</div>
												<div class="col-md-6 col-xs-12">
													<img class="img-responsive avatar-view notas-img" src="images/user.png" alt="Avatar" title="Change the avatar" />
													<div class="col-md-6">
														<h2>Apellido Paterno</h2>
														<h2>Apellido Materno</h2>
														<br>
														<h2>Nombre</h2>
														<br>
														<h2>Genero</h2>
														<br>
														<h2>Fecha de nacimiento</h2>
														<br>
														<h2>Grado y Seccion</h2>
													</div>
												</div>
											</div>
											<br>
											<div class="row">
												<a href="limpiar" class="btn btn-warning btn-notas">Limpiar</a>
												<a href="enviar" class="btn btn-danger btn-notas">Enviar</a>
											</div>
										</div>
					                </div>
					            </div>
	                        </div>
	                      </div>
	                    </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
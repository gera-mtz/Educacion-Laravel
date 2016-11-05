@extends('layouts.master')

@section('resources')
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
@stop

@section('content')
<script>
document.getElementById("perfil").classList.add('active');
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
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="profile_img">
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <img class="img-responsive avatar-view" src="{{URL::asset('images/user.png')}}" alt="Avatar" title="Change the avatar" style="text-align: center;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
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
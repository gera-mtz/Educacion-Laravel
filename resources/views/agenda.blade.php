@extends('layouts.master')

@section('title')
<title>Educacion|Agenda</title>
@stop


@section('content')
<script>
document.getElementById("perfil").classList.remove('active');
document.getElementById("grupos").classList.remove('active');
document.getElementById("tareascal").classList.remove('active');
document.getElementById("notas").classList.remove('active');
document.getElementById("agenda").classList.add('active');
document.getElementById("sliders").classList.remove('active');
document.getElementById("reportes").classList.remove('active');
</script>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                Agenda
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- page content -->
                            <div class="fc fc-cursor fc-ltr fc-unthemed" id="calendar">
                                <div class="fc-toolbar"><div class="fc-left">
                                    <div class="fc-button-group">
                                        <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                            <span class="fc-icon fc-icon-left-single-arrow"></span>
                                        </button>
                                        <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
                                            <span class="fc-icon fc-icon-right-single-arrow"></span>
                                        </button>
                                    </div>
                                    <button disabled="disabled" type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled">today</button>
                                </div>
                                <div class="fc-right">
                                    <div class="fc-button-group">
                                        <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button>
                                        <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button>
                                        <button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button>
                                    </div>
                                </div>
                                <div class="fc-center">
                                    <h2>November 2016</h2>
                                </div>
                                <div class="fc-clear"></div>
                            </div>
                            <div style="" class="fc-view-container">
                                <div style="" class="fc-view fc-month-view fc-basic-view">
                                    <table>
                                        <thead class="fc-head">
                                            <tr>
                                                <td class="fc-head-container fc-widget-header">
                                                    <div style="border-right-width: 1px; margin-right: 16px;" class="fc-row fc-widget-header">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="fc-day-header fc-widget-header fc-sun">Sun</th>
                                                                    <th class="fc-day-header fc-widget-header fc-mon">Mon</th>
                                                                    <th class="fc-day-header fc-widget-header fc-tue">Tue</th>
                                                                    <th class="fc-day-header fc-widget-header fc-wed">Wed</th>
                                                                    <th class="fc-day-header fc-widget-header fc-thu">Thu</th>
                                                                    <th class="fc-day-header fc-widget-header fc-fri">Fri</th>
                                                                    <th class="fc-day-header fc-widget-header fc-sat">Sat</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody class="fc-body">
                                            <tr>
                                                <td class="fc-widget-content">
                                                    <div style="overflow-x: hidden; overflow-y: scroll; height: 743px;" class="fc-scroller fc-day-grid-container">
                                                        <div class="fc-day-grid fc-unselectable"><div style="height: 123px;" class="fc-row fc-week fc-widget-content">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2016-10-30"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2016-10-31"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-today fc-state-highlight" data-date="2016-11-01"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-11-02"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-11-03"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-11-04"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-11-05"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2016-10-30">30</td>
                                                                            <td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2016-10-31">31</td>
                                                                            <td class="fc-day-number fc-tue fc-today fc-state-highlight" data-date="2016-11-01">1</td>
                                                                            <td class="fc-day-number fc-wed fc-future" data-date="2016-11-02">2</td>
                                                                            <td class="fc-day-number fc-thu fc-future" data-date="2016-11-03">3</td>
                                                                            <td class="fc-day-number fc-fri fc-future" data-date="2016-11-04">4</td>
                                                                            <td class="fc-day-number fc-sat fc-future" data-date="2016-11-05">5</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td rowspan="2"></td>
                                                                            <td rowspan="2"></td>
                                                                            <td class="fc-event-container">
                                                                                <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                                                    <div class="fc-content">
                                                                                        <span class="fc-time">12a</span>
                                                                                        <span class="fc-title">All Day Event</span>
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                            <td rowspan="2" class="fc-event-container">
                                                                                <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                                                    <div class="fc-content">
                                                                                        <span class="fc-time">7p</span>
                                                                                        <span class="fc-title">Birthday Party</span>
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                            <td rowspan="2"></td>
                                                                            <td rowspan="2"></td>
                                                                            <td rowspan="2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fc-event-container">
                                                                                <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                                                    <div class="fc-content">
                                                                                        <span class="fc-time">10:30a</span>
                                                                                        <span class="fc-title">Meeting</span>
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div style="height: 123px;" class="fc-row fc-week fc-widget-content">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-11-06"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2016-11-07"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2016-11-08"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-11-09"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-11-10"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-11-11"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-11-12"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <td class="fc-day-number fc-sun fc-future" data-date="2016-11-06">6</td>
                                                                            <td class="fc-day-number fc-mon fc-future" data-date="2016-11-07">7</td>
                                                                            <td class="fc-day-number fc-tue fc-future" data-date="2016-11-08">8</td>
                                                                            <td class="fc-day-number fc-wed fc-future" data-date="2016-11-09">9</td>
                                                                            <td class="fc-day-number fc-thu fc-future" data-date="2016-11-10">10</td>
                                                                            <td class="fc-day-number fc-fri fc-future" data-date="2016-11-11">11</td>
                                                                            <td class="fc-day-number fc-sat fc-future" data-date="2016-11-12">12</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div style="height: 123px;" class="fc-row fc-week fc-widget-content">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-11-13"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2016-11-14"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2016-11-15"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-11-16"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-11-17"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-11-18"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-11-19"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <td class="fc-day-number fc-sun fc-future" data-date="2016-11-13">13</td>
                                                                            <td class="fc-day-number fc-mon fc-future" data-date="2016-11-14">14</td>
                                                                            <td class="fc-day-number fc-tue fc-future" data-date="2016-11-15">15</td>
                                                                            <td class="fc-day-number fc-wed fc-future" data-date="2016-11-16">16</td>
                                                                            <td class="fc-day-number fc-thu fc-future" data-date="2016-11-17">17</td>
                                                                            <td class="fc-day-number fc-fri fc-future" data-date="2016-11-18">18</td>
                                                                            <td class="fc-day-number fc-sat fc-future" data-date="2016-11-19">19</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td class="fc-event-container">
                                                                                <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable">
                                                                                    <div class="fc-content">
                                                                                        <span class="fc-time">12p</span>
                                                                                        <span class="fc-title">Lunch</span>
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div style="height: 123px;" class="fc-row fc-week fc-widget-content">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-11-20"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2016-11-21"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2016-11-22"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-11-23"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-11-24"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-11-25"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-11-26"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <td class="fc-day-number fc-sun fc-future" data-date="2016-11-20">20</td>
                                                                            <td class="fc-day-number fc-mon fc-future" data-date="2016-11-21">21</td>
                                                                            <td class="fc-day-number fc-tue fc-future" data-date="2016-11-22">22</td>
                                                                            <td class="fc-day-number fc-wed fc-future" data-date="2016-11-23">23</td>
                                                                            <td class="fc-day-number fc-thu fc-future" data-date="2016-11-24">24</td>
                                                                            <td class="fc-day-number fc-fri fc-future" data-date="2016-11-25">25</td>
                                                                            <td class="fc-day-number fc-sat fc-future" data-date="2016-11-26">26</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            </div>
                                                            <div style="height: 123px;" class="fc-row fc-week fc-widget-content">
                                                                <div class="fc-bg">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-11-27"></td>
                                                                                <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2016-11-28"></td>
                                                                                <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2016-11-29"></td>
                                                                                <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-11-30"></td>
                                                                                <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2016-12-01"></td>
                                                                                <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2016-12-02"></td>
                                                                                <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2016-12-03"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="fc-content-skeleton">
                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <td class="fc-day-number fc-sun fc-future" data-date="2016-11-27">27</td>
                                                                                <td class="fc-day-number fc-mon fc-future" data-date="2016-11-28">28</td>
                                                                                <td class="fc-day-number fc-tue fc-future" data-date="2016-11-29">29</td>
                                                                                <td class="fc-day-number fc-wed fc-future" data-date="2016-11-30">30</td>
                                                                                <td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2016-12-01">1</td>
                                                                                <td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2016-12-02">2</td>
                                                                                <td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2016-12-03">3</td>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td class="fc-event-container">
                                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/">
                                                                                        <div class="fc-content">
                                                                                            <span class="fc-time">12a</span>
                                                                                            <span class="fc-title">Click for Google</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div style="height: 128px;" class="fc-row fc-week fc-widget-content">
                                                                <div class="fc-bg">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2016-12-04"></td>
                                                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2016-12-05"></td>
                                                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2016-12-06"></td>
                                                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2016-12-07"></td>
                                                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2016-12-08"></td>
                                                                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2016-12-09"></td>
                                                                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2016-12-10"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2016-12-04">4</td>
                                                                            <td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2016-12-05">5</td>
                                                                            <td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2016-12-06">6</td>
                                                                            <td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2016-12-07">7</td>
                                                                            <td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2016-12-08">8</td>
                                                                            <td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2016-12-09">9</td>
                                                                            <td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2016-12-10">10</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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


@extends('layout')

@section('title')
    Calendar
@endsection

@section('js')
<link rel='stylesheet' href='css/fullcalendar.css' />
<script src='css/js/jquery.min.js'></script>
<script src='css/js/moment.min.js'></script>
<script src='css/js/fullcalendar.js'></script>
<script>
    $(document).ready(function() {
        
       $('#calendar').fullCalendar({
           header: {
           left: 'prev,next today',
           center: 'title',
           right: 'month,basicWeek,basicDay'
           },
           editable: false,
           allDayDefault:true,
           events: {!! $json !!}
                });
            });
            $('.fc-event-content, .fc-event-time, .fc-event-title').css('font-size', '10px');
</script>
@endsection

@section('content')
    <div id="calendar"></div>
@endsection


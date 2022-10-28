@foreach(json_decode($doctor_services) as $d_service)

    <span class="label label-lg font-weight-boldlabel-light-primary label-inline">{{$d_service}}</span>
@endforeach
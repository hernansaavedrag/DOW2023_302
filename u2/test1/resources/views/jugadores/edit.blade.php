@extends('layouts.master')

@section('contenido-principal')
    <h3>Editar Jugador {{$jugador->equipo!=null?$jugador->equipo->nombre:'Sin Equipo'}}</h3>

    <div class="row">
        <!-- datos jugador-->
        <div class="col-2">
            <!--.card>.card-header+img.card-img-top+.card-body-->
            <div class="card">
                <div class="card-header">Jugador</div>
                <img src="{{Storage::url($jugador->imagen)}}" alt="{{$jugador->nombre}} {{$jugador->apellido}}" class="card-img-top">
                <!--ul.list-group.list-group-flush>li.list-group-item*3-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nomnbre:</b>{{$jugador->nombre}} {{$jugador->apellido}}</li>
                    <li class="list-group-item"><b>Posición:</b>{{$jugador->posicion}}</li>
                    <li class="list-group-item"><b>Número:</b>{{$jugador->numero}}</li>
                </ul>
            </div>
        </div>
        <!-- /datos jugador-->

        <!-- form edicion-->
        <div class="col-6">

        </div>
        <!-- /form edicion-->
    </div>

@endsection
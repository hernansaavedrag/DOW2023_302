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
            <div class="card">
                <div class="card-header">Formulario de edición</div>
                <div class="card-body">
                    <form method="POST" action="{{route('jugadores.update',$jugador->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" value="{{$jugador->apellido}}">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{$jugador->nombre}}">
                        </div>
                        <div class="form-group">
                            <label for="posicion">Posición:</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="pos-arquero" name="posicion" value="Arquero" @if($jugador->posicion=='Arquero') checked @endif>
                                    <label class="form-check-label" for="pos-arquero">Arquero</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="pos-defensa" name="posicion" value="Defensa" @if($jugador->posicion=='Defensa') checked @endif>
                                    <label class="form-check-label" for="pos-defensa">Defensa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="pos-volante" name="posicion" value="Volante" @if($jugador->posicion=='Volante') checked @endif>
                                    <label class="form-check-label" for="pos-volante">Volante</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="pos-delantero" name="posicion" value="Delantero" @if($jugador->posicion=='Delantero') checked @endif>
                                    <label class="form-check-label" for="pos-delantero">Delantero</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número de Camiseta: </label>
                            <input type="number" class="form-control" id="numero" name="numero" min="1" max="99" value="{{$jugador->numero}}">
                        </div>
                        <div class="form-group">
                            <label for="equipo">Equipo:</label>
                            <select name="equipo" id="equipo" class="form-control">
                                @foreach ($equipos as $equipo)
                                    <option value="{{$equipo->id}}" @if ($jugador->equipo_id==$equipo->id) selected="selected" @endif>{{$equipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <input type="file" id="imagen" name="imagen" class="form-control-file">
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type ="reset" class="btn btn-warning">Cancelar</button>
                                <button type ="submit" class="btn btn-success">Editar Equipo</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
        <!-- /form edicion-->
    </div>

@endsection
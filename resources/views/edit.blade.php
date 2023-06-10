
@if($idedit!=null)

<div class="panel panel-default">
    <form method="POST" action="{{ route('gastos.update', $idedit)}}" enctype="multipart/form-data"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    {{method_field("PUT")}}
    {{ csrf_field() }} 
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"><input type="text" class="form-control" name="precio" placeholder="Precio"></div>
            <div class="col-md-3"><input type="text" class="form-control" name="descripcion" placeholder="Descripcion"></div>
            <div class="col-md-2">
                <select name="id_anio" id="id_anio" class="form-control">
                    <option hidden>Año</option>
                    @foreach($anios as $anio)
                    <option value="{{$anio->id}}">{{$anio->anios}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select name="id_mes" id="id_mes" class="form-control">
                    <option hidden>Mes</option>
                    @foreach($mes as $me)
                    <option value="{{$me->id}}">{{$me->mes}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select name="dia" id="dia" class="form-control">
                    <option hidden>Dia</option>
                    @for($i=1 ; $i < 32; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-md-1"><button type="submit" class="btn btn-primary"><i class="bi bi-send-plus-fill"></i></a></div>
        </div>
    </div>
    </form>
</div>
@endif

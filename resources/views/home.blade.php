@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                @foreach($mes as $me)
                    <div class="btn-group " role="group" aria-label="...">
                    @if($ani!=0)
                        <a href="{{url('./'. $me->id . '/'. $ani )}}" class="btn btn-default btn-lg" style="font-size: 10px; text-align: center;">{{$me->mes}}</a>
                    @else
                        <a href="{{url('./'. $me->id)}}" class="btn btn-default btn-lg" style="font-size: 10px; text-align: center;">{{$me->mes}}</a>
                    @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                @foreach($anios as $anio)
                    <div class="btn-group " role="group" aria-label="...">
                        <a href="{{url('./'. $idmes . '/'. $anio->anios)}}" class="btn btn-default btn-lg">{{$anio->anios}}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="panel panel-default">
            <form action="">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8"><input type="text" class="form-control" placeholder="Descripcion"></div>
                    <div class="col-md-3">
                        <select name="dia" id="dia" class="form-control">
                            <option hidden>Dia</option>
                            @for($i=1 ; $i < 32; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-1"><a href="" class="btn btn-primary"><span class="bi bi-search" aria-hidden="true"></span></a></div>
                </div>
            </div>
            </form>
        </div>
        <div class="panel panel-default">
            <form method="POST" action="{{ route('gastos.store') }}" enctype="multipart/form-data"> 
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2"><input type="text" class="form-control" name="precio" placeholder="Precio" required></div>
                    <div class="col-md-3"><input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required></div>
                    <div class="col-md-2">
                        <select name="id_anio" id="id_anio" class="form-control" required>
                            <option value="" hidden>Año</option>
                            @foreach($anios as $anio)
                            <option value="{{$anio->id}}">{{$anio->anios}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="id_mes" id="id_mes" class="form-control" required>
                            <option value="" hidden>Mes</option>
                            @foreach($mes as $mes)
                            <option value="{{$mes->id}}">{{$mes->mes}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="dia" id="dia" class="form-control" required>
                            <option value="" hidden>Dia</option>
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

        @if($idedit!=null)
        
        <div class=" alert panel panel-default">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="bi bi-x-lg"></i></span></button>
            <form method="POST" action="{{ route('gastos.update', $idedit)}}" enctype="multipart/form-data"> 
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{method_field("PUT")}}
            {{ csrf_field() }} 
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2"><input type="text" class="form-control" name="precio" placeholder="Precio" value="{{$gast->precio}}"></div>
                    <div class="col-md-3"><input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="{{$gast->descripcion}}"></div>
                    <div class="col-md-2">
                        <select name="id_anio" id="id_anio" class="form-control">
                            <option value="{{$gast->id_anio}}" hidden>{{$gast->anios->anios}}</option>
                            @foreach($anios as $anio)
                            <option value="{{$anio->id}}">{{$anio->anios}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="id_mes" id="id_mes" class="form-control">
                            <option value="{{$gast->id_mes}}" hidden>{{$gast->mes->mes}}</option>
                            @foreach($meses as $meses)
                            <option value="{{$meses->id}}">{{$meses->mes}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="dia" id="dia" class="form-control">
                            <option value="{{$gast->dia}}" hidden>{{$gast->dia}}</option>
                            
                            @for($i=1 ; $i < 32; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-0"><button type="submit" class="btn btn-primary"><i class="bi bi-send-plus-fill"></i></a></div>
                </div>
            </div>
            </form>
        </div>
        
        @endif
        
        <div class="panel panel-primary">           
            <div class="panel-heading">Agenda {{$mesnombre}} @if($ani!=0){{$ani}} @endif</div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th scope="col"><center>Precio</center></th>
                    <th scope="col" style="width: 40%;"><center>Descripcion</center></th>
                    <th scope="col" style="width: 5%;"><center>Dia</center></th>
                    <th scope="col" style="width: 5%;"><center>Mes</center></th>
                    <th scope="col" style="width: 5%;"><center>Anio</center></th>
                    <th scope="col"><center>Hrs Agregado</center></th>
                    <th scope="col" style="width: 10%;" colspan="2"></th>
                    </tr>
                </thead>
                <tbody>   
                    @if($gastos!=null)                     
                    @foreach($gastos as $gastos)
                    <tr>
                    <th scope="row">${{$gastos->precio}}</th>
                    <td>{{$gastos->descripcion}}</td>
                    <td><center>{{$gastos->dia}}</center></td>
                    <td><center>{{$gastos->Mes->mes}}</center></td>
                    <td><center>{{$gastos->Anios->anios}}</center></td>
                    <td><center>{{ $gastos->created_at->format('h:i:s') }}</center></td>
                    <td><center>
                        <a href="{{URL::to('gastos/'. $gastos->id . '/'. $ani . '/' . $idmes . '/edit')}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Editar</a>
                        </center>
                    </td>
                    <td><center>
                    <form action="{{ route('gastos.destroy',$gastos->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"><b><i class="bi bi-trash"></i></b></button>
                    </form>
                        </center>
                    </td>
                    </tr>
                    @endforeach
                    @endif
                    <tr>
                    <th colspan="6" scope="row">Total:</th>
                    <th colspan="2">${{$preciototal}}</th>
                    </tr>
                </tbody>
            </table>    
        </div>
        
    </div>
</div>
@endsection

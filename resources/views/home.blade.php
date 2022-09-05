@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group " role="group" aria-label="...">
                        <button type="button" class="btn btn-default btn-lg">1</button>
                    </div>
                    <div class="btn-group " role="group" aria-label="...">
                        <button type="button" class="btn btn-default btn-lg">2</button>
                    </div>
            </div>
        </div>
        <div class="panel panel-default">
                <form action="">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Descripcion"></div>
                        <div class="col-md-2">
                            <select class="form-control">
                                <option value="">Año</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="" id="" class="form-control">
                                <option value="">Mes</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="" id="" class="form-control">
                                <option value="">Dia</option>
                            </select>
                        </div>
                        <div class="col-md-1"><a href="" class="btn btn-primary">Buscar</a></div>
                      </div>
                </div>
                </form>
            </div>
            <div class="panel panel-default">
                <form action="">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2"><input type="text" class="form-control" placeholder="Precio"></div>
                        <div class="col-md-2"><input type="text" class="form-control" placeholder="Descripcion"></div>
                        <div class="col-md-2">
                            <select class="form-control">
                                <option value="">Año</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="" id="" class="form-control">
                                <option value="">Mes</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="" id="" class="form-control">
                                <option value="">Dia</option>
                            </select>
                        </div>
                        <div class="col-md-1"><a href="" class="btn btn-primary">enviar</a></div>
                      </div>
                </div>
                </form>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Agenda</div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Año</th>
                            <th scope="col">Mes</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Horario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">$</th>
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
</div>
@endsection

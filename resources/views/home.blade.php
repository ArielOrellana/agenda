@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group " role="group" aria-label="...">
                        <a href="" class="btn btn-default btn-lg">Años</a>
                    </div>
            </div>
        </div>
        <div class="panel panel-default">
                <form action="">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5"><input type="text" class="form-control" placeholder="Descripcion"></div>
                        <div class="col-md-3">
                            <select name="" id="" class="form-control">
                                <option value="">Mes</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="" id="" class="form-control">
                                <option value="">Dia</option>
                            </select>
                        </div>
                        <div class="col-md-1"><a href="" class="btn btn-primary"><span class="bi bi-search" aria-hidden="true"></span></a></div>
                      </div>
                </div>
                </form>
            </div>
            <div class="panel panel-default">
                <form action="">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2"><input type="text" class="form-control" placeholder="Precio"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Descripcion"></div>
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
                        <div class="col-md-1"><a href="" class="btn btn-primary"><i class="bi bi-send-plus-fill"></i></a></div>
                      </div>
                </div>
                </form>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Agenda</div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col"><center>Precio</center></th>
                            <th scope="col" style="width: 40%;"><center>Descripcion</center></th>
                            <th scope="col"><center>Dia</center></th>
                            <th scope="col"><center>Horario</center></th>
                            <th scope="col" style="width: 10%;" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">$</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><center>
                                <a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Editar</a>
                                </center>
                            </td>
                            <td><center>
                            <a href="" class="btn btn-danger"><b><i class="bi bi-trash"></i></b></a>
                                </center>
                            </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

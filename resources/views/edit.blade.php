@if(Session::has('edit'))

<div class="panel panel-default">
    <p>{{ Session::get('edit') }}</p>
    <form method="POST" action="" enctype="multipart/form-data"> 
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    {{method_field("PUT")}}
    {{ csrf_field() }} 
    <div class="panel-body">
    <button type="button" class="close" data-dimiss="alert">x</button>
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
                    @foreach($mes as $mes)
                    <option value="{{$mes->id}}">{{$mes->mes}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select name="dia" id="dia" class="form-control">
                    <option hidden>Dia</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="col-md-1"><button type="submit" class="btn btn-primary"><i class="bi bi-send-plus-fill"></i></a></div>
        </div>
    </div>
    <!--</form>-->
</div>
@endif
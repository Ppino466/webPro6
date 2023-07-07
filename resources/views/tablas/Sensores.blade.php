@extends('layouts.app', ['activePage' => 'Sensores', 'titlePage' => __('Sensores')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="ml-auto mr-auto">
      <a class="btn btn-info" href="{{route('registroSensor')}}" role="button">Agregar sensor
        <i class="material-icons right"></i>
      </a>
    </div>
    <div>
      <div class="card">
        <div class="card-header card-header-warning">
          <h4 class="card-title">Sensores de apertura</h4>
          <p class="card-category">Sensores activos</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>ID</th>
              <th>Ubicacion</th>
              <th>Marca</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Cortina 1</td>
                <td>Generica</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Cortina 2</td>
                <td>Generica</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Puerta Principal</td>
                <td>Generica</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Puerta trasera</td>
                <td>Generica</td>
                <td>Activo</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <div>
      <div class="card">
        <div class="card-header card-header-info">
          <h4 class="card-title">Sensores de temperatura</h4>
          <p class="card-category">Sensores activos</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-info">
              <th>ID</th>
              <th>Ubicacion</th>
              <th>Marca</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Camara 1</td>
                <td>GMIC</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Camara 2</td>
                <td>GMIC</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Vitrina 1</td>
                <td>MTK</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Vitrina 2</td>
                <td>MTK</td>
                <td>Activo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <div class="card-header card-header-danger">
          <h4 class="card-title">Sensores de humo</h4>
          <p class="card-category">Sensores activos</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-danger">
              <th>ID</th>
              <th>Ubicacion</th>
              <th>Marca</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Camara</td>
                <td>Generica</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Almacen</td>
                <td>MTK</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Tienda</td>
                <td>MDN</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Puerta</td>
                <td>MTK</td>
                <td>Activo</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <div>
      <div class="card">
        <div class="card-header card-header-success">
          <h4 class="card-title">Basculas</h4>
          <p class="card-category">Basculas activas</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-success">
              <th>ID</th>
              <th>Ubicacion</th>
              <th>Marca</th>
              <th>Peso Max</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mercado Felipe Angeles</td>
                <td>Truper</td>
                <td>10 Kg</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Mercado Felipe Angeles</td>
                <td>Generica</td>
                <td>10 Kg</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Mercado Felipe Angeles</td>
                <td>Torrey</td>
                <td>10 Kg</td>
                <td>Activo</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Mercado Felipe Angeles</td>
                <td>Pretul</td>
                <td>10 Kg</td>
                <td>Activo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
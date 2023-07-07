@extends('layouts.app', ['activePage' => 'Dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <a href="{{route('registros')}}#tablaAperturas" role="button">
                <img src="./material/img/icons/puerta.png" alt="MDN">
              </a>
            </div>
            <p class="card-category">Registros de Apertura</p>
            <h3 class="card-title">5
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <a href="{{route('registros')}}#tablaHumos" role="button">
                <img src="./material/img/icons/fuego.png" alt="MDN">
              </a>
            </div>
            <p class="card-category">Registros de humo</p>
            <h3 class="card-title">0</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <a href="{{route('registros')}}#tablaTemperaturas" role="button">
                <img src="./material/img/icons/temperature.png" alt="MDN">
              </a>
            </div>
            <p class="card-category">Registros de temperatura</p>
            <h3 class="card-title">2</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <a href="{{route('registros')}}#tablaPesos" role="button">
                <img src="./material/img/icons/peso.png" alt="MDN">
              </a>
            </div>
            <p class="card-category">Pesos capturados</p>
            <h3 class="card-title">25</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <a href="{{route('ventas')}}" role="button">
                <img src="./material/img/icons/venta.png" alt="MDN">
              </a>
            </div>
            <p class="card-category">Registros de Ventas</p>
            <h3 class="card-title">5
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <a href="{{route('clientes')}}" role="button">
                <img src="./material/img/icons/cliente.png" alt="MDN">
              </a>
            </div>
            <p class="card-category">Registros de Clientes</p>
            <h3 class="card-title">5
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- GRAFICAS
    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-info">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Registro temperaturas</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> incremento promedio
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Aperturas Registradas</h4>
            <p class="card-category">Ultima semana</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="completedTasksChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Pesos capturados</h4>
            <p class="card-category">Ultima semana</p>
          </div>
        </div>
      </div>
    </div> -->

  </div>
</div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
  });
</script>
@endpush
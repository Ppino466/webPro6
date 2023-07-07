@extends('layouts.app', ['activePage' => 'Ventas', 'titlePage' => __('Ventas')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Ventas</h4>
            <p class="card-category"> Registro de ventas</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class=" text-success">
                  <th>Folio</th>
                  <th>Cliente</th>
                  <th>Fecha</th>
                  <th>Total</th>
                  <th>Accion</th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      10
                    </td>
                    <td>
                      Cliente 1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      120
                    </td>
                    <td>
                    <a href="#"><i class="material-icons">file_download</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      11
                    </td>
                    <td>
                      Cliente 1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      100
                    </td>
                    <td>
                    <a href="#"><i class="material-icons">file_download</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      12
                    </td>
                    <td>
                      Cliente 1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      200
                    </td>
                    <td>
                    <a href="#"><i class="material-icons">file_download</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      13
                    </td>
                    <td>
                      Cliente 1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      250
                    </td>
                    <td>
                    <a href="#"><i class="material-icons">file_download</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      14
                    </td>
                    <td>
                      Cliente 1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      150
                    </td>
                    <td>
                    <a href="#"><i class="material-icons">file_download</i></a>
                    </td>
                  </tr>
                  <tr>
                  <tr>
                    <td>
                      15
                    </td>
                    <td>
                      Cliente 1
                    </td>
                    <td>
                      2023-03-28
                    </td>
                    <td>
                      300
                    </td>
                    <td>
                    <a href="#"><i class="material-icons">file_download</i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      @endsection
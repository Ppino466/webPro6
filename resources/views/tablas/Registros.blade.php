@extends('layouts.app', ['activePage' => 'Registros', 'titlePage' => __('Registros')])

@section('css')
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('content')
<div class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Aperturas</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover  shadow-lg" style="width:100%" id="Aperturas">
                <thead class="card-header-info text-white">
                  <th>
                    idLectura
                  </th>
                  <th>
                    idSensor
                  </th>
                  <th>
                    Fecha
                  </th>
                  <th>
                    Hora
                  </th>
                  <th>
                    Estado
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Abierto
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Abierto
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Abierto
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-28
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Abierto
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-29
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Abierto
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-30
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Abierto
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card" id="tablaTemperaturas">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Temperaturas</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover  shadow-lg" style="width:100%" id="Temperaturas">
                <thead class="card-header-info text-white">
                  <th>
                    idTemp
                  </th>
                  <th>
                    idSensorT
                  </th>
                  <th>
                    fecha
                  </th>
                  <th>
                    hora
                  </th>
                  <th>
                    valor
                  </th>
                  <th>
                    estatus
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      20.15
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      20.15
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      23.50
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:45:10
                    </td>
                    <td>
                      22.00
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:51:10
                    </td>
                    <td>
                      25.23
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      2
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:51:10
                    </td>
                    <td>
                      19.15
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card" id="tablaHumos">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Alertas Humo</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover  shadow-lg" style="width:100%" id="Humos">
                <thead class="card-header-info text-white">
                  <th>
                    idLectura
                  </th>
                  <th>
                    idSensor
                  </th>
                  <th>
                    Fecha
                  </th>
                  <th>
                    Hora
                  </th>
                  <th>
                    Estatus
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:45:10
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:51:10
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      2
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:51:10
                    </td>
                    <td>
                      Ok
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card" id="tablaPesos">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Pesos</h4>
         
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover  shadow-lg" style="width:100%" id="Pesos">
                <thead class="card-header-info text-white">
                  <th>
                    idTemp
                  </th>
                  <th>
                    idBascula
                  </th>
                  <th>
                    Fecha
                  </th>
                  <th>
                    Hora
                  </th>
                  <th>
                    Valor
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      20.15
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      20.15
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:41:10
                    </td>
                    <td>
                      23.50
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:45:10
                    </td>
                    <td>
                      22.00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:51:10
                    </td>
                    <td>
                      25.23
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      2
                    </td>
                    <td>
                      2023-03-27
                    </td>
                    <td>
                      23:51:10
                    </td>
                    <td>
                      19.15
                    </td>
                  </tr>
                </tbody>
              </table>
              @section('js')
              <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
              <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
              <script>
                $(document).ready(function() {
                  new DataTable('#Aperturas', {
                    "language": {
                      "search": "Buscar: ",
                      "lengthMenu": "Mostrar _MENU_ registros por página",
                      "zeroRecords": "No se encontraron registros",
                      "info": "Mostrando página _PAGE_ de _PAGES_",
                      "infoEmpty": "No hay registros disponibles",
                      "infoFiltered": "(filtrados de _MAX_ registros totales)",
                      "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                      },
                    },
                    "initComplete": function() {
                      this.api().columns().every(function() {
                        var column = this;
                        var input = $('<input type="text" class="form-control form-control-sm" placeholder="Buscar...">')
                          .appendTo($(column.footer()).empty())
                          .on('keyup change clear', function() {
                            if (column.search() !== this.value) {
                              column.search(this.value).draw();
                            }
                          });
                      });
                    }
                   
                  });

                  new DataTable('#Humos', {
                    "language": {
                      "search": "Buscar: ",
                      "lengthMenu": "Mostrar _MENU_ registros por página",
                      "zeroRecords": "No se encontraron registros",
                      "info": "Mostrando página _PAGE_ de _PAGES_",
                      "infoEmpty": "No hay registros disponibles",
                      "infoFiltered": "(filtrados de _MAX_ registros totales)",
                      "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                      },
                    },
                    "initComplete": function() {
                      this.api().columns().every(function() {
                        var column = this;
                        var input = $('<input type="text" class="form-control form-control-sm" placeholder="Buscar...">')
                          .appendTo($(column.footer()).empty())
                          .on('keyup change clear', function() {
                            if (column.search() !== this.value) {
                              column.search(this.value).draw();
                            }
                          });
                      });
                    }
                  });

                  new DataTable('#Temperaturas', {
                    "language": {
                      "search": "Buscar: ",
                      "lengthMenu": "Mostrar _MENU_ registros por página",
                      "zeroRecords": "No se encontraron registros",
                      "info": "Mostrando página _PAGE_ de _PAGES_",
                      "infoEmpty": "No hay registros disponibles",
                      "infoFiltered": "(filtrados de _MAX_ registros totales)",
                      "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                      },
                    },
                    "initComplete": function() {
                      this.api().columns().every(function() {
                        var column = this;
                        var input = $('<input type="text" class="form-control form-control-sm" placeholder="Buscar...">')
                          .appendTo($(column.footer()).empty())
                          .on('keyup change clear', function() {
                            if (column.search() !== this.value) {
                              column.search(this.value).draw();
                            }
                          });
                      });
                    }
                  });

                  new DataTable('#Pesos', {
                    "language": {
                      "search": "Buscar: ",
                      "lengthMenu": "Mostrar _MENU_ registros por página",
                      "zeroRecords": "No se encontraron registros",
                      "info": "Mostrando página _PAGE_ de _PAGES_",
                      "infoEmpty": "No hay registros disponibles",
                      "infoFiltered": "(filtrados de _MAX_ registros totales)",
                      "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                      },
                    },
                    "initComplete": function() {
                      this.api().columns().every(function() {
                        var column = this;
                        var input = $('<input type="text" class="form-control form-control-sm" placeholder="Buscar...">')
                          .appendTo($(column.footer()).empty())
                          .on('keyup change clear', function() {
                            if (column.search() !== this.value) {
                              column.search(this.value).draw();
                            }
                          });
                      });
                    }
              });
                });
              </script>
              @endsection
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app', ['activePage' => 'Sensores', 'titlePage' => __('Sensores')])

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
            <h4 class="card-title ">Sensores</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table table class="table table-hover  shadow-lg" style="width:100%" id="Sensores">
                <thead class="card-header-info text-white">
                  <th>idSensor</th>
                  <th>Tipo</th>
                  <th>Ubicacion</th>
                  <th>Estado</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Temperatura</td>
                    <td>Camara 01</td>
                    <td>Activo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Temperatura</td>
                    <td>Camara 02</td>
                    <td>Activo</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Apertura</td>
                    <td>Cortina 01</td>
                    <td>Activo</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Apertura</td>
                    <td>Cortina 02</td>
                    <td>Activo</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Humo</td>
                    <td>Principal</td>
                    <td>Activo</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Humo</td>
                    <td>Almacen</td>
                    <td>Activo</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Peso</td>
                    <td>Principal</td>
                    <td>Activo</td>
                  </tr>
                </tbody>
              </table>
              @section('js')
              <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
              <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
              <script>
                $(document).ready(function() {
                  new DataTable('#Sensores', {
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
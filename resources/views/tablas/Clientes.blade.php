@extends('layouts.app', ['activePage' => 'Clientes', 'titlePage' => __('Clientes')])

@section('css')
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('content')
<div class="content">
<p align="right">
            <a href="#" style="margin-right:10px;" class="btn btn-success" title="Registar">Registar Cliente</a>
        </p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Clientes</h4>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table table class="table table-hover  shadow-lg" style="width:100%" id="Clientes">
                <thead class="card-header-info text-white">
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Acciones</th>
                </thead>

                <tbody>
                  @foreach ($clients as $client)
                  <tr>
                    <td>{{ $client['id'] }}</td>
                    <td>{{ $client['Name'] }}</td>
                    <td>{{ $client['lastName'] }}</td>
                    <td>{{ $client['Email'] }}</td>
                    <td>{{ $client['Phone'] }}</td>
                    <td>
                      <a href="#"><i class="material-icons" title="Editar" style="color:green;">edit</i></a>
                      <a href="#"><i class="material-icons" title="Eliminar" style="color: red;">delete</i></a>
                    </td>

                  </tr>
                  @endforeach
                </tbody>

              </table>
              @section('js')
              <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
              <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
              <script>
                $(document).ready(function() {
                  new DataTable('#Clientes', {
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

      @endsection
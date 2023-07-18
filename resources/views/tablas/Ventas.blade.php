@extends('layouts.app', ['activePage' => 'Ventas', 'titlePage' => __('Ventas')])

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
            <h4 class="card-title ">Ventas</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table table class="table table-hover  shadow-lg" style="width:100%" id="Ventas">
                <thead class="card-header-info text-white">
                  <th>Folio</th>
                  <th>Fecha</th>
                  <th>Cliente</th>
                  <th>Total</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2023-03-27</td>
                    <td>Cliente 01</td>
                    <td>1200</td>
                    <td>
                      <div>
                        <a href="#" role="button" class="btn btn-outline-danger btn-sm"><i class="material-icons" title="PDF" style="color: red;">picture_as_pdf</i></a>
                        <a href="#" role="button" class="btn btn-outline-success btn-sm"><i class="material-icons" title="XLSX" style="color: green;">table_view</i></a>
                        <a href="#" role="button" class="btn btn-outline-info btn-sm"><i class="material-icons" title="Imprimir" style="color: #1aa3d9;">print</i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2023-03-27</td>
                    <td>Cliente 01</td>
                    <td>1000</td>
                    <td>
                      <div>
                        <a href="#" role="button" class="btn btn-outline-danger btn-sm"><i class="material-icons" title="PDF" style="color: red;">picture_as_pdf</i></a>
                        <a href="#" role="button" class="btn btn-outline-success btn-sm"><i class="material-icons" title="XLSX" style="color: green;">table_view</i></a>
                        <a href="#" role="button" class="btn btn-outline-info btn-sm"><i class="material-icons" title="Imprimir" style="color: #1aa3d9;">print</i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>2023-03-27</td>
                    <td>Cliente 02</td>
                    <td>2000</td>
                    <td>
                      <div>
                        <a href="#" role="button" class="btn btn-outline-danger btn-sm"><i class="material-icons" title="PDF" style="color: red;">picture_as_pdf</i></a>
                        <a href="#" role="button" class="btn btn-outline-success btn-sm"><i class="material-icons" title="XLSX" style="color: green;">table_view</i></a>
                        <a href="#" role="button" class="btn btn-outline-info btn-sm"><i class="material-icons" title="Imprimir" style="color: #1aa3d9;">print</i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>2023-03-28</td>
                    <td>Cliente 03</td>
                    <td>1200</td>
                    <td>
                      <div>
                        <a href="#" role="button" class="btn btn-outline-danger btn-sm"><i class="material-icons" title="PDF" style="color: red;">picture_as_pdf</i></a>
                        <a href="#" role="button" class="btn btn-outline-success btn-sm"><i class="material-icons" title="XLSX" style="color: green;">table_view</i></a>
                        <a href="#" role="button" class="btn btn-outline-info btn-sm"><i class="material-icons" title="Imprimir" style="color: #1aa3d9;">print</i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>2023-03-28</td>
                    <td>Cliente 01</td>
                    <td>900</td>
                    <td>
                      <div>
                        <a href="#" role="button" class="btn btn-outline-danger btn-sm"><i class="material-icons" title="PDF" style="color: red;">picture_as_pdf</i></a>
                        <a href="#" role="button" class="btn btn-outline-success btn-sm"><i class="material-icons" title="XLSX" style="color: green;">table_view</i></a>
                        <a href="#" role="button" class="btn btn-outline-info btn-sm"><i class="material-icons" title="Imprimir" style="color: #1aa3d9;">print</i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>2023-03-28</td>
                    <td>Cliente 02</td>
                    <td>1500</td>
                    <td>
                      <div>
                        <a href="#" role="button" class="btn btn-outline-danger btn-sm"><i class="material-icons" title="PDF" style="color: red;">picture_as_pdf</i></a>
                        <a href="#" role="button" class="btn btn-outline-success btn-sm"><i class="material-icons" title="XLSX" style="color: green;">table_view</i></a>
                        <a href="#" role="button" class="btn btn-outline-info btn-sm"><i class="material-icons" title="Imprimir" style="color: #1aa3d9;">print</i></a>
                      </div>
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
                  new DataTable('#Ventas', {
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
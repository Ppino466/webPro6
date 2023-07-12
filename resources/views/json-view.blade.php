@extends('layouts.app', ['activePage' => 'Dashboard', 'titlePage' => __('Dashboard')])
@section('content')
<div class="content">
  <div class="container-fluid">
<h1>JSON Table</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
               <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['id_articulo'] }}</td>
                
                    <td>{{ $item['descripcion'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
  
  
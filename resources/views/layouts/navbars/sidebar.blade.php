
<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
 <div class="logo">
    <img src="./material/img/logo.jpg" width="250" height="200">
    <a href="#" class="simple-text logo-normal">
      {{auth()->user()->name}}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'Home' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Registros' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('registros') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Registros') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Sensores' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('sensores') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Sensores') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Ventas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ventas') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Ventas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Clientes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('clientes') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Clientes') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
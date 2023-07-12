<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <h2 class="display-2" style="color:#1AA3d9; text-align: center;">{{$activePage}}</h2>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
        <div class="input-group no-border">
          <div class="ripple-container"></div>
        </button>
        </div>
      </form>
      <ul class="navbar-nav">       
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">account_box</i>
            
            <p class="d-lg-none d-md-block">
              {{ __('Cuenta') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item"  href="{{ route('profile.edit') }}" title="Editar Perfil">{{ __('Perfil') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" title="Salir" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Salir ') }}<i class="material-icons">exit_to_app</i></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

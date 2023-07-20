@extends('layouts.app', ['activePage' => 'Clientes', 'titlePage' => __('Clientes')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('clientes.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-info">
                <h4 class="card-title">{{ __('Informacion Cliente') }}</h4>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('Name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('Name') ? ' is-invalid' : '' }}" name="Name" id="Name" type="text" placeholder="{{ __('Nombre') }}"  required="true" aria-required="true"/>
                      @if ($errors->has('Name'))
                        <span id="Name-error" class="error text-danger" for="Name">{{ $errors->first('Name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Apellidos') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('lastName') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" id="lastName" type="text" placeholder="{{ __('Apellidos') }}"  required="true" aria-required="true"/>
                      @if ($errors->has('lastName'))
                        <span id="lastName-error" class="error text-danger" for="lastName">{{ $errors->first('lastName') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Correo') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('Email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('Email') ? ' is-invalid' : '' }}" name="Email" id="Email" type="email" placeholder="{{ __('Correo') }}"  required />
                      @if ($errors->has('Email'))
                        <span id="Email-error" class="error text-danger" for="Email">{{ $errors->first('Email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Telefono') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('Phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('Phone') ? ' is-invalid' : '' }}" name="Phone" id="Phone" type="tel" placeholder="{{ __('Nombre') }}"  required="true" aria-required="true"/>
                      @if ($errors->has('Phone'))
                        <span id="Phone-error" class="error text-danger" for="Phone">{{ $errors->first('Phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-info">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
@endsection
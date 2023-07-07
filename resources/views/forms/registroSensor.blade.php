@extends('layouts.app', ['activePage' => 'Registro Sensor', 'titlePage' => __('registroSensor')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-6 col-sm-2">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Agregar sensor</h4>
                        <p class="card-category"> Ingrese los siguientes datos</p>
                    </div>
                    <div class="card-body">
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
                            <label class="col-sm-3 col-form-label">{{ __('Ubicacion') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __('Ubicacion') }}" value="" required="true" aria-required="true" />
                                    @if ($errors->has('ubicacion'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('SSID') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __('SSID') }}" value="" required="true" aria-required="true" />
                                    @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Contrasena') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __('Contrasena') }}" value="" required="true" aria-required="true" />
                                    @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Marca') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __('Marca') }}" value="" required="true" aria-required="true" />
                                    @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-info">{{ __('Guardar') }}</button>
                    </div>
                </div>
            </div>
        </div>
        @endsection
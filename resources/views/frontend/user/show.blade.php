@extends('layouts.frontend')
{{-- Account Details --}}
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @php
                    $usuario = Auth::user()->name;
                    $nombre = explode(' ', trim($usuario));
                    $names = str_word_count($usuario);
                @endphp

                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>{{ ucwords($nombre[0]) }}'s <a href="{{ url('my-account') }}">{{ __('Mi Cuenta') }}</a></h3>
                            <li><a href="{{ url('my-orders') }}">- {{ __('Ordenes') }} <!--<span>(12)</span>--></a></li>
                            <li><a href="{{ url('user-details/'.Auth::id()) }}"><font color="c70017">-> {{ __('Detalles de Cuenta') }} <!--<span>(12)</span>--></font></a></li>
                            <p>
                                <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary py-3 px-4 "><span>{{ __('Cerrar Sesión') }}</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ftco-animate">
                    <p>
                        <a href="{{ url('user-edit/'.Auth::id()) }}" class="btn btn-primary py-3 px-4 "><span>{{ __('Editar datos de cuenta') }}</span></a>
                    </p>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3>{{ __('Detalles de Cuenta') }}</h3>
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-4">
                            <label>{{ __('Nombre') }}</label>
                            <input readonly name="name" type="text" class="form-control" value="{{ $user->name }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-4">
                            <label>{{ __('Teléfono') }}</label>
                            <input readonly name="phone" type="text" class="form-control" value="{{ $user->phone }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-4">
                            <label>Email</label>
                            <input readonly name="email" type="text" class="form-control" value="{{ $user->email }}">
                            <small class="form-text">{{ __("You can't change email") }}</small>
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>{{ __('Pais') }}</label>
                            <input readonly name="country" type="text" class="form-control" value="{{ $user->country }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>{{ __('Departamento/Estado') }}</label>
                            <input readonly name="state" type="text" class="form-control" value="{{ $user->state }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>{{ __('Ciudad') }}</label>
                            <input readonly name="city" type="text" class="form-control" value="{{ $user->city }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-3">
                            <label>{{ __('Codigo Postal') }}</label>
                            <input readonly name="zipcode" type="text" class="form-control" value="{{ $user->zipcode }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-12">
                            <label>{{ __('Dirección') }} 1</label>
                            <input readonly name="address1" type="text" class="form-control" value="{{ $user->address1 }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-12">
                            <label>{{ __('Dirección') }} 2</label>
                            <input readonly name="address2" type="text" class="form-control" value="{{ $user->address2 }}">
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-6">
                            <label>{{ __('Zona Horaria') }}</label>
                            <input readonly name="timezone" type="text" class="form-control" value="{{ $user->timezone }}">
                        </div><!-- End .col-sm-6 -->
                    </div>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection

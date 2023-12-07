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
                            <h3>
                                <font color="fa9932">Hola</font>  {{ ucwords($nombre[0]) }}! <br>
                            </h3>

                            <ul class="list-group">
                                <li class="list-group-item"><a class="h4" href="{{ url('my-account') }}"><font color="fa9932">{{ __('Mi Cuenta') }}</font></a></li>
                                <li class="list-group-item"><a href="{{ url('user-details/'.Auth::id()) }}">- {{ __('Detalles de Cuenta') }}</a></li>
                                <li class="list-group-item active"><a href="{{ url('user-subscription/'.Auth::id()) }}"><font color="white">- {{ __('Suscripción') }}</font></a></li>
                                <li class="list-group-item">
                                    <a href="javascript:; {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"><span>{{ __('Cerrar Sesión') }}</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ftco-animate">


                    <div class="row">
                        <div class="col-sm-12">
                            <h3>{{ __('Suscripción') }}</h3>
                        </div><!-- End .col-sm-6 -->
                        {{-- @if($subscripcion)

                        @else

                        @endif --}}
                        @isset($subscription)
                            <div class="col-sm-4">
                                <label><b>{{ __('Activa Hasta') }}</b></label>
                                @php
                                    $active_until = date("d-m-Y", strtotime($subscription->active_until));
                                    $plan = App\Models\Plan::find($subscription->plan_id);
                                @endphp
                                <p>{{ $active_until }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label><b>{{ __('Plan') }}</b></label>
                                <p>{{ $plan->slug }}</p>
                            </div>
                            <div class="col-sm-4">
                                <label><b>{{ __('Precio') }}</b></label>
                                <p>{{ $plan->visual_price }}</p>
                            </div>
                        @else
                            <div class="col-sm-12">
                                <p>No tienes una suscripción activa.</p>
                            </div>
                        @endisset


                    </div>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection

@extends('layouts.admin')

@section('content')
    <div class="row">

        {{-- <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card background">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <div class="text-center pt-1">
                        <h4 class="mb-0">Dashboard</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div> --}}
                <div class="row mb-4">
                    <div class="col-xl-12">
                        <div class="row">

                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('instructors') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">school</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Instructores') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('course-categories') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">category</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Categorías de Cursos') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('index-courses') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">local_library</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Cursos') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('index-subscriptions') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">workspace_premium</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Suscripciones') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('users') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">people_alt</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            {{-- <h6 class="text-center mb-0">Paypal</h6>
                                            <span class="text-xs">Freelance Payment</span> --}}
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Usuarios') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6  p-2">
                                <div class="card">
                                    <a href="{{ url('config') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">settings</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            {{-- <h6 class="text-center mb-0">Paypal</h6>
                                            <span class="text-xs">Freelance Payment</span> --}}
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Configuración') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('show-user/'.Auth::id()) }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">person</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Mi Perfil') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-12">



                </div>

    </div>
@endsection

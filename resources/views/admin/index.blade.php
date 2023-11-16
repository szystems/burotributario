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
                            <div class="col-md-2 col-6">
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
                                            <h5 class="mb-0">{{ __('My Profile') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-6">
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
                                            <h5 class="mb-0">{{ __('Course Categories') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
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
                                            <h5 class="mb-0">{{ __('Courses') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
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
                                            <h5 class="mb-0">{{ __('Users') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-6">
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
                                            <h5 class="mb-0">{{ __('Settings') }}</h5>
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
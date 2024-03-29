@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">category</i>
                    </div>

                    <div class="text-center pt-1">
                        {{-- <p class="text-sm mb-0 text-capitalize">Today's Money</p> --}}
                        <h4 class="mb-0">{{ __('Categorias de Contenidos') }}</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div>
                <div class="card-body p-3 pt-2">
                    <h4><u>{{ __('Ver') }} {{ __('Categoría de Contenidos') }}</u></h4>
                    <div>
                        <a href="{{ url('edit-course-category/'.$category->id) }}" type="button" class="btn btn-warning"><i class="material-icons">edit</i></a>
                        <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $category->id }}">
                            <i class="material-icons">delete</i>
                        </button>
                        @include('admin.category_course.deletemodal')
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for=""><strong>{{ __('Nombre') }}</strong></label>
                            <p>{{ $category->name }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""><strong>{{ __('Slug') }}</strong></label>
                            <p>{{ $category->slug }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for=""><strong>{{ __('Descripción') }}</strong></label>
                            <textarea rows="3" class="form-control border px-2" readonly>{{ $category->description }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="show"
                                    {{ $category->show == 1 ? 'checked' : '' }} disabled>
                                <label class="form-check-label" for="flexSwitchCheckDefault"><strong>{{ __('Esconder/Mostrar') }}</strong></label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="popular"
                                    {{ $category->popular == 1 ? 'checked' : '' }} disabled>
                                <label class="form-check-label" for="flexSwitchCheckDefault"><strong>Popular</strong></label>
                            </div>
                        </div>
                        @if ($category->image)
                            <div class="col-md-12 mb-3">
                                <img class="border-radius-md w-25"
                                    src="{{ asset('assets/uploads/category_courses/' . $category->image) }}" alt="Imagen de categoría de Contenido">
                            </div>
                        @endif
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> --}}
                    </div>
                </div>
            </div>

        </div>
    @endsection

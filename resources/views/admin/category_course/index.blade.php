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
                        <h4 class="mb-0">{{ __('Categorías de Contenidos') }}</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div>
                <div class="card-body p-3 pt-2">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <a href="{{ url('add-course-category') }}" class="btn btn-success">
                                <i class="material-icons opacity-10">add</i> {{ __('Agregar') }} {{ __('Categoría de Contenidos') }}
                            </a>

                        </div>
                        @include('admin.category_course.search')
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-sm align-categorys-center mb-0 table-striped table-bordered">
                                    <thead>
                                        <tr>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">{{ __('Categoría') }}</th>
                                            {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">{{ __('Descripción') }}</th> --}}
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">{{ __('Esconder/Mostrar') }}</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">{{ __('Popular') }}</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0"><i class="material-icons">format_list_bulleted</i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    @if ($category->image)
                                                    <div>
                                                        <img src="{{ asset('assets/uploads/category_courses/'.$category->image) }}" class="avatar avatar-xl me-5">
                                                    </div>
                                                @endif
                                                  <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-xs"><a href="{{ url('show-course-category/'.$category->id) }}">{{ $category->name }}</a></h6>
                                                    {{-- <p class="text-xs text-secondary mb-0">Slug: {{ $course->slug }}</p> --}}
                                                  </div>
                                                </div>
                                            </td>
                                            {{-- <td class="align-middle text-center text-sm">{{ $category->description }}</td> --}}

                                            <td class="align-middle text-center text-sm"><strong>
                                                <span class="badge badge-sm bg-gradient-{{
                                                $category->show == '0' ? 'warning'
                                                : ($category->show == '1' ? 'success'
                                                : ""
                                                ) }}">
                                                    {{ $category->show == '0' ? __('Escondiendo')
                                                    : ($category->show == '1' ? __('Mostrando')
                                                    : ""
                                                    ) }}
                                                </span>
                                            </strong></td>
                                            <td class="align-middle text-center text-sm"><strong>
                                                <span class="badge badge-sm bg-gradient-{{
                                                $category->popular == '0' ? 'warning'
                                                : ($category->popular == '1' ? 'success'
                                                : ""
                                                ) }}">
                                                    {{ $category->popular == '0' ? __('No Popular')
                                                    : ($category->popular == '1' ? __('Popular')
                                                    : ""
                                                    ) }}
                                                </span>
                                            </strong></td>
                                            <td class="align-middle text-center text-sm">
                                                <a href="{{ url('show-course-category/'.$category->id) }}" type="button" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                <a href="{{ url('edit-course-category/'.$category->id) }}" type="button" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $category->id }}">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        @include('admin.category_course.deletemodal')
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> --}}
                </div>
            </div>
        </div>

    </div>
@endsection

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
                    <h4><u>{{ __('Edit') }} {{ __('Categoría de Contenidos') }}</u></h4>
                    @if (count($errors)>0)
                        <div class="alert alert-danger text-white" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ url('update-course-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">{{ __('Nombre') }}</label>
                                <input type="text" class="form-control border px-2 " name="name" value="{{ $category->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('name') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Descripción') }}</label>
                                <textarea name="description" cols="30" rows="5" class="form-control border px-2 ">{{ $category->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('description') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="show" {{ $category->show == 1 ? 'checked':'' }}>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Esconder/Mostrar') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="popular" {{ $category->popular == 1 ? 'checked':'' }}>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Popular</label>
                                </div>
                            </div>
                            @if ($category->image)
                            <div class="col-md-12 mb-3">
                                <img class="border-radius-md w-25" src="{{ asset('assets/uploads/category_courses/'.$category->image) }}" alt="Imagen">
                            </div>
                            @endif
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Cambiar Imagen') }}</label>
                                <input type="file" name="image" class="form-control border">
                            </div>
                            <div class="col-md-12 mb-3" >
                                <button type="submit" class="btn btn-success"><i class="material-icons">save</i> {{ __('Grabar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> --}}
                </div>
            </div>
        </div>

    </div>
@endsection

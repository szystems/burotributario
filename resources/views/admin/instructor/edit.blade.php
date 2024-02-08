@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">school</i>
                    </div>
                    <div class="text-center pt-1">
                        {{-- <p class="text-sm mb-0 text-capitalize">Today's Money</p> --}}
                        <h4 class="mb-0">{{ __('Categorías de Contenido') }}</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div>
                <div class="card-body p-3 pt-2">
                    <h4><u>{{ __('Editar') }} {{ __('instructor') }}</u></h4>
                    @if (count($errors)>0)
                        <div class="alert alert-danger text-white" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ url('update-instructor/'.$instructor->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Nombre') }}</label>
                                <input type="text" class="form-control border px-2 " name="name" value="{{ $instructor->name }}">
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
                                <textarea name="description" cols="30" rows="5" class="form-control border px-2 ">{{ $instructor->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('description') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Facebook Link') }}</label>
                                <input type="text" class="form-control border px-2 " name="facebook" value="{{ $instructor->facebook }}">
                                @if ($errors->has('facebook'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('facebook') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Twitter Link') }}</label>
                                <input type="text" class="form-control border px-2 " name="twitter" value="{{ $instructor->twitter }}">
                                @if ($errors->has('twitter'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('twitter') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Instagram Link') }}</label>
                                <input type="text" class="form-control border px-2 " name="instagram" value="{{ $instructor->instagram }}">
                                @if ($errors->has('instagram'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('instagram') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('linkedin Link') }}</label>
                                <input type="text" class="form-control border px-2 " name="linkedin" value="{{ $instructor->linkedin }}">
                                @if ($errors->has('linkedin'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('linkedin') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div>

                            @if ($instructor->image)
                            <div class="col-md-12 mb-3">
                                <img class="border-radius-md w-25" src="{{ asset('assets/uploads/instructors/'.$instructor->image) }}" alt="Imagen">
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

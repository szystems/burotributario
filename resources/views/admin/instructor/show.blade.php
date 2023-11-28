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
                        <h4 class="mb-0">{{ __('Instructor') }}</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div>
                <div class="card-body p-3 pt-2">
                    <h4><u>{{ __('Ver') }} {{ __('Instructor') }}</u></h4>
                    <div>
                        <a href="{{ url('edit-instructor/'.$instructor->id) }}" type="button" class="btn btn-warning"><i class="material-icons">edit</i></a>
                        <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $instructor->id }}">
                            <i class="material-icons">delete</i>
                        </button>
                        @include('admin.instructor.deletemodal')
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for=""><strong>{{ __('Name') }}</strong></label>
                            <p>{{ $instructor->name }}</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for=""><strong>{{ __('Descripción') }}</strong></label>
                            <textarea rows="3" class="form-control border px-2" readonly>{{ $instructor->description }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for=""><strong>{{ __('Facebook Link') }}</strong></label>
                            <p><a href="{{ $instructor->facebook }}" target="_blank" rel="facebook link">{{ $instructor->facebook }}</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for=""><strong>{{ __('Twitter Link') }}</strong></label>
                            <p><a href="{{ $instructor->twitter }}" target="_blank" rel="facebook link">{{ $instructor->twitter }}</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for=""><strong>{{ __('Instagram Link') }}</strong></label>
                            <p><a href="{{ $instructor->instagram }}" target="_blank" rel="facebook link">{{ $instructor->instagram }}</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for=""><strong>{{ __('Linkedin Link') }}</strong></label>
                            <p><a href="{{ $instructor->linkedin }}" target="_blank" rel="facebook link">{{ $instructor->linkedin }}</a></p>
                        </div>

                        @if ($instructor->image)
                            <div class="col-md-12 mb-3">
                                <img class="border-radius-md w-25"
                                    src="{{ asset('assets/uploads/instructors/' . $instructor->image) }}" alt="Instructor Image">
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

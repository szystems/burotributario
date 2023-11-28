@extends('layouts.frontend')
{{-- Contact View --}}
@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Instructores</h3>
                {{-- <p class="h7" href=""><font="white">{{ $category->description }}</font></p> --}}
                {{-- <p class="h7" href=""><font color="fa9932">{{ $categoryCourses->count() }} Cursos</font></p> --}}
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Instructores</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Instructores</h5>
                <h1>Conoce a nuestros instructores</h1>
            </div>
            <div class="row">

                @foreach ($teachers as $teacher)
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('assets/uploads/instructors/' . $teacher->image) }}" alt="">
                            <div class="team-social">
                                @if ($teacher->facebook)<a class="btn btn-outline-light btn-square mx-1" href="{{ $teacher->facebook }}"><i class="fab fa-facebook-f"></i></a>@endif
                                @if ($teacher->twitter)<a class="btn btn-outline-light btn-square mx-1" href="{{ $teacher->twitter }}"><i class="fab fa-twitter"></i></a>@endif
                                @if ($teacher->instagram)<a class="btn btn-outline-light btn-square mx-1" href="{{ $teacher->instagram }}"><i class="fab fa-instagram"></i></a>@endif
                                @if ($teacher->linkedin)<a class="btn btn-outline-light btn-square mx-1" href="{{ $teacher->linkedin }}"><i class="fab fa-linkedin-in"></i></a>@endif
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>{{ $teacher->name }}</h5>
                            <hr>
                            <p class="m-0">{{ $teacher->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection

@extends('layouts.frontend')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">{{ $category->name }} </h3>
                <p class="h7" href=""><font color="fa9932">{{ $categoryCourses->count() }} Cursos</font></p>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Categoría</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                {{-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Cursos</h5> --}}
                <h1>Cursos ({{ $categoryCourses->count() }})</h1>
            </div>
            <div class="row">

                @foreach ($categoryCourses as $course)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        @php
                            $numVideos = \App\Models\Video::where('course_id', $course->id)->count();
                            $numAudios = \App\Models\Audio::where('course_id', $course->id)->count();
                            $catInfo = \App\Models\CategoryCourse::find($course->category_course_id);
                        @endphp
                        <a href="{{ url('show-course/'.$catInfo->slug.'/'.$course->slug) }}">
                            <img class="img-fluid" src="{{ asset('assets/uploads/courses/'.$course->image) }}" alt="">
                        </a>
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fas fa-video text-primary mr-2"></i>{{ $numVideos }}</small>
                                <small class="m-0"><i class="fas fa-podcast text-primary mr-2"></i>{{ $numAudios }}</small>
                            </div>
                            <a class="h5" href="{{ url('show-course/'.$catInfo->slug.'/'.$course->slug) }}">{{ $course->name }}</a><br>
                            <a class="h8" href="{{ url('category/'.$catInfo->slug) }}">{{ $catInfo->name }}</a>



                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5> --}}
                                    <p>{{ $course->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Courses End -->

@endsection

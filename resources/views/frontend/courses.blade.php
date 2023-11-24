@extends('layouts.frontend')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Cursos </h3>
                {{-- <p class="h7" href=""><font color="fa9932">{{ $courses->count() }} Cursos</font></p> --}}
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">cursos</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-0">
        <div class="container py-5">
            <div class="row">

                <div class="col-lg-12 mt-5 mt-lg-0">

                    <!-- Search Form -->
                    <div class="mb-5">
                        <form action="{{ url('courses') }}" method="GET">
                            @csrf
                            <div class="input-group">

                                <input type="text" name="fcourse" class="form-control form-control-lg" placeholder="Buscar curso" value="{{ $queryCourse }}">
                                <div class="input-group-append">
                                    <button class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-lg-9">
                    <div class="row pb-3">

                        @foreach ($courses as $course)
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


                                    @if ($course->description != null)
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                <h5 class="m-0">$99</h5> --}}
                                                <p>{{ substr($course->description, 0, 100) }}
                                                    <a class="h7" href="{{ url('show-course/'.$catInfo->slug.'/'.$course->slug) }}">... Ver mas</a>
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12">
                            {{ $courses->links() }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-5 mt-lg-0">

                    <!-- Category List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categorías</h3>
                        <ul class="list-group list-group-flush">

                            @foreach ($filterCategories as $category)
                                @php
                                    $numCourses = \App\Models\Course::where('show',1)->where('category_course_id',$category->id)->count();
                                @endphp
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('category/'.$category->slug) }}" class="text-decoration-none h6 m-0">{{ $category->name }}</a>
                                    <span class="badge badge-primary badge-pill">{{ $numCourses }}</span>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <!-- pupular List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Populares</h3>
                        <ul class="list-group list-group-flush">

                            @foreach ($popularCourses as $popular)
                                @php
                                    $numVideos = \App\Models\Video::where('course_id', $popular->id)->count();
                                    $numAudios = \App\Models\Audio::where('course_id', $popular->id)->count();
                                    $catInfo = \App\Models\CategoryCourse::find($popular->category_course_id);
                                @endphp
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('show-course/'.$catInfo->slug.'/'.$popular->slug) }}" class="text-decoration-none h6 m-0">{{ $popular->name }}</a>
                                    <small class="m-0"><i class="fas fa-video text-primary mr-2"></i>{{ $numVideos }}</small>
                                    <small class="m-0"><i class="fas fa-podcast text-primary mr-2"></i>{{ $numAudios }}</small>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <!-- last List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Últimos</h3>
                        <ul class="list-group list-group-flush">

                            @foreach ($lastCourses as $last)
                                @php
                                    $numVideos = \App\Models\Video::where('course_id', $last->id)->count();
                                    $numAudios = \App\Models\Audio::where('course_id', $last->id)->count();
                                    $catInfo = \App\Models\CategoryCourse::find($last->category_course_id);
                                @endphp
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('show-course/'.$catInfo->slug.'/'.$last->slug) }}" class="text-decoration-none h6 m-0">{{ $last->name }}</a>
                                    <small class="m-0"><i class="fas fa-video text-primary mr-2"></i>{{ $numVideos }}</small>
                                    <small class="m-0"><i class="fas fa-podcast text-primary mr-2"></i>{{ $numAudios }}</small>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection

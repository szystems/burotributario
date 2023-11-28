@extends('layouts.frontend')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Categorías ({{ $categories->count() }})</h3>
                {{-- <p class="h7" href=""><font color="fa9932"></font></p> --}}
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Categorías</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Categories Start -->
    <div class="container-fluid py-0">
        <div class="container py-0">

            {{-- <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Cursos</h5>
                <h1>Cursos ({{ $categories->count() }})</h1>
            </div> --}}
            <div class="row">
                {{-- <p class="h7" href=""><font color="fa9932">{{ $category->description }}</font></p> --}}

                @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        @php
                            $numCourses = \App\Models\Course::where('category_course_id', $category->id)->count();
                        @endphp
                        <a href="{{ url('category/'.$category->slug) }}">
                            <img class="img-fluid" src="{{ asset('assets/uploads/category_courses/'.$category->image) }}" alt="">
                        </a>
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fas fa-book-reader text-primary mr-2"></i>Cursos: {{ $numCourses }}</small>
                            </div>
                            <a class="h5" href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a>


                            @if ($category->description != null)
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5> --}}
                                    <p>
                                        {{ substr($category->description, 0, 100) }}
                                        <a class="h7" href="{{ url('category/'.$category->slug) }}">... Ver mas</a>
                                    </p>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Categories End -->

@endsection

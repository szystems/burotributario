@extends('layouts.frontend')

@section('content')

    <!-- Header Start -->
    @php
        $numVideos = \App\Models\Video::where('course_id', $course->id)->count();
        $numAudios = \App\Models\Audio::where('course_id', $course->id)->count();
        $numDocuments = \App\Models\Document::where('course_id', $course->id)->count();
        $catInfo = \App\Models\CategoryCourse::find($course->category_course_id);
    @endphp
    {{-- <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">{{ $course->name }} </h3>
                <p class="h7" href=""><font color="fa9932">{{ $categoryCourses->count() }} Cursos</font></p>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('/') }}">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url('category/'.$catInfo->slug) }}">{{ $catInfo->name }}</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Curso</p>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/uploads/courses/'.$course->image) }}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><a href="{{ url('category/'.$catInfo->slug) }}">{{ $catInfo->name }}</a></h5>
                        <h1>{{ $course->name }}</h1>
                    </div>
                    <p>{{ $course->description }}</p>
                    @if ($course->file_pdf)
                        <a href="{{ asset('assets/uploads/courses_pdf/'.$course->file_pdf) }}" type="button" class="btn btn-danger py-md-2 px-md-4 font-weight-semi-bold mt-2" target="blank__"><i class="fas fa-download text-secondary mr-2"></i> PDF</a>
                    @endif
                    @if ($instructors->count() != 0)
                        <h4>Instructores ({{ $instructors->count() }})</h4>
                        <ul class="list-group">
                            @foreach ($instructors as $instructor)
                                @php
                                    $instructorInfo = \App\Models\Instructor::where('id', $instructor->instructor_id)->first();
                                @endphp
                                <li class="list-group-item">
                                    <a href="{{ url('teachers') }}">{{ $instructorInfo->name }}</a>
                                    <hr>
                                    <div class="team-social">
                                        @if ($instructorInfo->facebook)<a class="btn btn-outline-dark btn-square mx-1" href="{{ $instructorInfo->facebook }}"><i class="fab fa-facebook-f"></i></a>@endif
                                        @if ($instructorInfo->twitter)<a class="btn btn-outline-dark btn-square mx-1" href="{{ $instructorInfo->twitter }}"><i class="fab fa-twitter"></i></a>@endif
                                        @if ($instructorInfo->instagram)<a class="btn btn-outline-dark btn-square mx-1" href="{{ $instructorInfo->instagram }}"><i class="fab fa-instagram"></i></a>@endif
                                        @if ($instructorInfo->linkedin)<a class="btn btn-outline-dark btn-square mx-1" href="{{ $instructorInfo->linkedin }}"><i class="fab fa-linkedin-in"></i></a>@endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    @if ($numVideos > 0) <a href="#videos" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-video text-secondary mr-2"></i>{{ $numVideos }}</a> @endif
                    @if ($numAudios > 0) <a href="#audios" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-podcast text-secondary mr-2"></i>{{ $numAudios }}</a> @endif
                    @if ($numDocuments > 0) <a href="#documents" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fa fa-file-pdf text-secondary mr-2"></i>{{ $numDocuments }}</a> @endif




                </div>
                @if ($numVideos > 0)
                <div class="col-lg-12">
                    <hr />
                    <!-- video List -->
                    <div class="mb-5">
                        <h4 id="videos" class="text-uppercase mb-4" style="letter: 5px;">
                            <i class="fas fa-video text-primary mr-2"></i>
                            <u>Videos</u>
                            (
                            @if (Auth::check())
                                @php
                                    $mediaVideos = \App\Models\MediaVideo::where('course_id', $course->id)->where('user_id', Auth::user()->id)->count()
                                @endphp
                                <font color="green"><b>{{ $mediaVideos }}&nbsp;</b></font>/
                            @endif
                            {{ $numVideos }}
                            )
                        </h4>
                        @if (Auth::check())
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#resetVideoModal">
                                <i class="fas fa-undo-alt text-secondary mr-2"></i> Resetear Videos
                            </button>
                            @include('frontend.resetvideomodal')
                        @endif
                        <ul class="list-group list-group-flush">

                            @foreach ($videos as $video)
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    {{-- @if (Auth::guest())
                                        <a href="{{ url('login') }}" class="text-decoration-none h5 m-0"><i class="fas fa-caret-right text-primary mr-2"></i>{{ $video->name }}</a>
                                        <a href="{{ url('login') }}" class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-play text-primary mr-2"></i></a>
                                    @else
                                        @if (! optional(auth()->user())->hasActiveSubscription())
                                            <a href="{{ url('subscribe') }}" class="text-decoration-none h5 m-0"><i class="fas fa-caret-right text-primary mr-2"></i>{{ $video->name }}</a>
                                            <a href="{{ url('subscribe') }}" class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-play text-primary mr-2"></i></a>
                                        @else
                                            <a href="{{ url('show-course/'.$course->slug.'/video/'.$video->id) }}" class="text-decoration-none h5 m-0"><i class="fas fa-caret-right text-primary mr-2"></i>{{ $video->name }}</a>
                                            <a href="{{ url('show-course/'.$course->slug.'/video/'.$video->id) }}" class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-play text-primary mr-2"></i></a>
                                        @endif
                                    @endif --}}
                                    <a href="{{ url('show-course/'.$course->slug.'/video/'.$video->id) }}" class="text-decoration-none h5 m-0">
                                        <i class="fas fa-caret-right text-primary mr-2"></i>
                                        <small>{{ $video->name }}</small>
                                        @if (Auth::check() and \App\Models\MediaVideo::where('video_id',$video->id)->where('user_id',Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/'.$course->slug.'/video/'.$video->id) }}" class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                {{-- @if ($video->description != null)
                                    <li>
                                        <p>{{ substr($video->description, 0, 200) }}<a class="h7" href="{{ url('show-course/'.$course->slug.'/video/'.$video->id) }}">... Ver mas</a></p>
                                    </li>
                                @endif --}}
                            @endforeach

                        </ul>
                    </div>
                </div>
                @endif
                @if ($numAudios > 0)
                <div class="col-lg-12">
                    <hr />
                    <!-- video List -->
                    <div class="mb-5">
                        <h4 id="audios" class="text-uppercase mb-4" style="letter: 5px;"><i class="fas fa-podcast text-primary mr-2"></i>
                            <u>Audios</u>
                            (
                            @if (Auth::check())
                                @php
                                    $mediaAudios = \App\Models\MediaAudio::where('course_id', $course->id)->where('user_id', Auth::user()->id)->count()
                                @endphp
                                <font color="green"><b>{{ $mediaAudios }}&nbsp;</b></font>/
                                @endif
                            {{ $numAudios }})
                        </h4>
                        @if (Auth::check())
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#resetAudioModal">
                                <i class="fas fa-undo-alt text-secondary mr-2"></i> Resetear Audios
                            </button>
                            @include('frontend.resetaudiomodal')
                        @endif
                        <ul class="list-group list-group-flush">

                            @foreach ($audios as $audio)
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('show-course/'.$course->slug.'/audio/'.$audio->id) }}" class="text-decoration-none h5 m-0">
                                        <i class="fas fa-caret-right text-primary mr-2"></i>
                                        <small>{{ $audio->name }}</small>
                                        @if (Auth::check() and \App\Models\MediaAudio::where('audio_id',$audio->id)->where('user_id',Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/'.$course->slug.'/audio/'.$audio->id) }}" class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                {{-- @if ($audio->description != null)
                                    <li>
                                        <p>{{ substr($audio->description, 0, 200) }}<a class="h7" href="{{ url('show-course/'.$course->slug.'/audio/'.$audio->id) }}">... Ver mas</a></p>
                                    </li>
                                @endif --}}
                            @endforeach

                        </ul>
                    </div>
                </div>
                @endif
                @if ($numDocuments > 0)
                <div class="col-lg-12">
                    <hr />
                    <!-- documents List -->
                    <div class="mb-5">
                        <h4 id="documents" class="text-uppercase mb-4" style="letter: 5px;"><i class="fa fa-file-pdf text-primary mr-2"></i>
                            <u>Documentos</u>
                            (
                            @if (Auth::check())
                                @php
                                    $mediaDocuments = \App\Models\MediaDocument::where('course_id', $course->id)->where('user_id', Auth::user()->id)->count()
                                @endphp
                                <font color="green"><b>{{ $mediaDocuments }}&nbsp;</b></font>/
                                @endif
                            {{ $numDocuments }})
                        </h4>
                        @if (Auth::check())
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#resetDocumentModal">
                                <i class="fas fa-undo-alt text-secondary mr-2"></i> Resetear Documentos
                            </button>
                            @include('frontend.resetdocumentmodal')
                        @endif
                        <ul class="list-group list-group-flush">

                            @foreach ($documents as $document)
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('show-course/'.$course->slug.'/document/'.$document->id) }}" class="text-decoration-none h5 m-0">
                                        <i class="fas fa-caret-right text-primary mr-2"></i>
                                        <small>{{ $document->name }}</small>
                                        @if (Auth::check() and \App\Models\MediaDocument::where('document_id',$document->id)->where('user_id',Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/'.$course->slug.'/document/'.$document->id) }}" class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                {{-- @if ($audio->description != null)
                                    <li>
                                        <p>{{ substr($audio->description, 0, 200) }}<a class="h7" href="{{ url('show-course/'.$course->slug.'/audio/'.$audio->id) }}">... Ver mas</a></p>
                                    </li>
                                @endif --}}
                            @endforeach

                        </ul>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
    <!-- About End -->




@endsection

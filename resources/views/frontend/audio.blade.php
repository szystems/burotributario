@extends('layouts.frontend')


@section('content')
    <!-- Header Start -->
    @php
        $numVideos = \App\Models\Video::where('course_id', $course->id)->count();
        $numAudios = \App\Models\Audio::where('course_id', $course->id)->count();
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
    <div class="container-fluid py-0">
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><a
                                href="{{ url('category/' . $catInfo->slug) }}">{{ $catInfo->name }}</a></h5>
                        <h2><a href="{{ url('show-course/' . $catInfo->slug . '/' . $course->slug) }}">{{ $course->name }}</a></h2>
                        <h1 align="center"><u>{{ $audio->name }}</u></h1>
                    </div>
                </div>

                <div class="col-lg-12 m-0">

                    <div class="ratio ratio-21x3">
                        <audio id="myAudio" controls autoplay controlsList="nodownload">
                            <source src="{{ asset('assets/uploads/audios/' . $audio->file_audio) }}" type="audio/ogg">
                            <source src="{{ asset('assets/uploads/ausios/' . $audio->file_audio) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <input type="hidden" value="{{ $audio->id }}" id="audio_id" class="audio_id">
                        <input type="hidden" value="{{ $course->id }}" id="course_id" class="course_id">
                        <input type="hidden" value="{{ Auth::user()->id }}" id="user_id" class="user_id">
                    </div>

                </div>
                <div class="col-lg-12">
                    <hr>
                    <p>{{ $audio->description }}</p>
                    <a href="#videos" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i
                            class="fas fa-video text-secondary mr-2"></i>{{ $numVideos }}</a>
                    <a href="#audios" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i
                            class="fas fa-podcast text-secondary mr-2"></i>{{ $numAudios }}</a>

                    @if ($course->file_pdf)
                        <a href="{{ asset('assets/uploads/courses_pdf/' . $course->file_pdf) }}" type="button"
                            class="btn btn-danger py-md-2 px-md-4 font-weight-semi-bold mt-2" target="blank__"><i
                                class="fas fa-download text-secondary mr-2"></i> PDF</a>
                    @endif


                </div>
                <div class="col-lg-12">
                    <hr />
                    <!-- video List -->
                    <div class="mb-5">
                        <h3 id="myVideo" class="text-uppercase mb-4" style="letter-spacing: 5px;">
                            <i class="fas fa-video text-primary mr-2"></i> Videos
                            (
                            @if (Auth::check())
                                @php
                                    $mediaVideos = \App\Models\MediaVideo::where('course_id', $course->id)
                                        ->where('user_id', Auth::user()->id)
                                        ->count();
                                @endphp
                                <font color="green"><b>{{ $mediaVideos }}&nbsp;</b></font>/
                            @endif
                            {{ $numVideos }}
                            )
                        </h3>
                        @if (Auth::check())
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#resetVideoModal">
                                <i class="fas fa-undo-alt text-secondary mr-2"></i> Resetear Videos
                            </button>
                            @include('frontend.resetvideomodal')
                        @endif

                        <ul class="list-group list-group-flush">

                            @foreach ($videos as $videoP)
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'video/' . $videoP->id) }}"
                                        class="text-decoration-none h5 m-0"><i
                                            class="fas fa-caret-right text-primary mr-2"></i>{{ $videoP->name }}
                                        @if (Auth::check() and
                                                \App\Models\MediaVideo::where('video_id', $videoP->id)->where('user_id', Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'video/' . $videoP->id) }}"
                                        class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i
                                            class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                @if ($videoP->description != null)
                                    <li>
                                        <p>{{ substr($videoP->description, 0, 200) }}<a class="h7"
                                                href="{{ url('show-course/' . $course->slug . '/' . 'video/' . $videoP->id) }}">...
                                                Ver mas</a></p>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <hr />
                    <!-- video List -->
                    <div class="mb-5">
                        <h3 id="audios" class="text-uppercase mb-4" style="letter-spacing: 5px;">
                            <i class="fas fa-podcast text-primary mr-2"></i> Audios
                            (
                            @if (Auth::check())
                                @php
                                    $numAudios = \App\Models\MediaAudio::where('course_id', $course->id)
                                        ->where('user_id', Auth::user()->id)
                                        ->count();
                                @endphp
                                <font color="green"><b>{{ $numAudios }}&nbsp;</b></font>/
                            @endif
                            {{ $numAudios }}
                            )
                        </h3>
                        @if (Auth::check())
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#resetAudioModal">
                                <i class="fas fa-undo-alt text-secondary mr-2"></i> Resetear Audios
                            </button>
                            @include('frontend.resetaudiomodal')
                        @endif
                        <ul class="list-group list-group-flush">

                            @foreach ($audios as $audioP)
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'audio/' . $audioP->id) }}"
                                        class="text-decoration-none h5 m-0"><i
                                            class="fas fa-caret-right text-primary mr-2"></i>{{ $audioP->name }}
                                        @if ($audio->id == $audioP->id)
                                            <font color="fa9932">(Reproduciendo)</font>
                                        @endif
                                        @if (Auth::check() and \App\Models\MediaAudio::where('audio_id',$audioP->id)->where('user_id',Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'audio/' . $audioP->id) }}"
                                        class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i
                                            class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                @if ($audioP->description != null)
                                    <li>
                                        <p>{{ substr($audioP->description, 0, 200) }}<a class="h7"
                                                href="{{ url('show-course/' . $course->slug . '/' . 'audio/' . $audioP->id) }}">...
                                                Ver mas</a></p>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var audio = document.getElementById("myAudio");
            audio.onended = function() {

                var audio_id = "{{ $audio->id }}";
                var course_id = "{{ $course->id }}";
                var user_id = "{{ Auth::user()->id }}";

                $.ajax({
                    type: "POST",
                    url: "{{ url('add-media-audio') }}",
                    data: {
                        'audio_id': audio_id,
                        'course_id': course_id,
                        'user_id': user_id,
                    },
                    success: function(response) {
                        swal("", response.status, "success");
                        setTimeout(function() {
                            window.location.href = "{{ url('show-course/' . $catInfo->slug . '/' . $course->slug) }}";
                        }, 3000); // 5000 milliseconds = 5 seconds
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            };
        });
    </script>
@endsection

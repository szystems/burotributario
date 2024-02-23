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
    <div class="container-fluid py-0">
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><a
                                href="{{ url('category/' . $catInfo->slug) }}">{{ $catInfo->name }}</a></h5>
                        <h2><a href="{{ url('show-course/' . $catInfo->slug . '/' . $course->slug) }}">{{ $course->name }}</a></h2>
                        <h1 align="center"><u>{{ $document->name }}</u></h1>
                        <p>{{ $document->description }}</p>
                    </div>
                </div>


                        {{-- documento --}}
                        @php
                            use Jenssegers\Agent\Agent;
                            $agent = new Agent();
                        @endphp

                        @if ($agent->match('BuroTributarioApp'))
                        <div class="col-lg-12 m-0">
                            <a href="{{ asset('assets/uploads/pdfs/' . $document->file_pdf) }}" class="btn btn-danger py-md-2 px-md-4 font-weight-semi-bold mt-2" target="_blank"><i class="fa fa-file-pdf text-secondary mr-2"></i>Ver Documento</a>
                        </div>
                        @endif
                        @if (!$agent->match('BuroTributarioApp'))
                        <div class="col-lg-12 m-0" style="height: 100vh;">
                            <a href="{{ asset('assets/uploads/pdfs/' . $document->file_pdf) }}#zoom=100&toolbar=0&navpanes=0&scrollbar=0" class="btn btn-danger py-md-2 px-md-4 font-weight-semi-bold mt-2" target="_blank"><i class="fa fa-file-pdf text-secondary mr-2"></i>Ver Documento</a>
                            <iframe src="{{ asset('assets/uploads/pdfs/' . $document->file_pdf) }}#zoom=100&toolbar=0&navpanes=0&scrollbar=0" frameborder="0" width="100%" height="100%">
                        </div>
                        @endif

                <div class="col-lg-12">
                    <hr>

                    @if ($numVideos > 0) <a href="#videos" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-video text-secondary mr-2"></i>{{ $numVideos }}</a> @endif
                    @if ($numAudios > 0)<a href="#audios" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fas fa-podcast text-secondary mr-2"></i>{{ $numAudios }}</a> @endif
                    @if ($numDocuments > 0)<a href="#documents" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><i class="fa fa-file-pdf text-secondary mr-2"></i>{{ $numDocuments }}</a> @endif
                    @if ($course->file_pdf)
                        <a href="{{ asset('assets/uploads/courses_pdf/' . $course->file_pdf) }}" type="button"
                            class="btn btn-danger py-md-2 px-md-4 font-weight-semi-bold mt-2" target="blank__"><i
                                class="fas fa-download text-secondary mr-2"></i> PDF</a>
                    @endif


                </div>
                @if ($numVideos > 0)
                <div class="col-lg-12">
                    <hr />
                    <!-- video List -->
                    <div class="mb-5">
                        <h4 id="documents" class="text-uppercase mb-4" style="letter: 5px;"><i class="fas fa-video text-primary mr-2"></i>
                            <u>Videos</u>
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
                                            class="fas fa-caret-right text-primary mr-2"></i><small>{{ $videoP->name }}</small>
                                        @if (Auth::check() and
                                                \App\Models\MediaVideo::where('video_id', $videoP->id)->where('user_id', Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'video/' . $videoP->id) }}"
                                        class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i
                                            class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                {{-- @if ($videoP->description != null)
                                    <li>
                                        <p>{{ substr($videoP->description, 0, 200) }}<a class="h7"
                                                href="{{ url('show-course/' . $course->slug . '/' . 'video/' . $videoP->id) }}">...
                                                Ver mas</a></p>
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
                    <!-- audio List -->
                    <div class="mb-5">
                        <h4 id="documents" class="text-uppercase mb-4" style="letter: 5px;"><i class="fas fa-podcast text-primary mr-2"></i>
                            <u>Audios</u>
                            (
                            @if (Auth::check())
                                @php
                                    $mediaAudios = \App\Models\MediaAudio::where('course_id', $course->id)->where('user_id', Auth::user()->id)->count()
                                @endphp
                                <font color="green"><b>{{ $mediaAudios }}&nbsp;</b></font>/
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
                                            class="fas fa-caret-right text-primary mr-2"></i><small>{{ $audioP->name }}</small>
                                        @if (Auth::check() and \App\Models\MediaAudio::where('audio_id',$audioP->id)->where('user_id',Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'audio/' . $audioP->id) }}"
                                        class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i
                                            class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                {{-- @if ($audioP->description != null)
                                    <li>
                                        <p>{{ substr($audioP->description, 0, 200) }}<a class="h7"
                                                href="{{ url('show-course/' . $course->slug . '/' . 'audio/' . $audioP->id) }}">...
                                                Ver mas</a></p>
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
                                    $numDocuments = \App\Models\MediaDocument::where('course_id', $course->id)
                                        ->where('user_id', Auth::user()->id)
                                        ->count();
                                @endphp
                                <font color="green"><b>{{ $numDocuments }}&nbsp;</b></font>/
                            @endif
                            {{ $numDocuments }}
                            )
                        </h3>
                        @if (Auth::check())
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#resetDocumentModal">
                                <i class="fas fa-undo-alt text-secondary mr-2"></i> Resetear Documentos
                            </button>
                            @include('frontend.resetdocumentmodal')
                        @endif
                        <ul class="list-group list-group-flush">

                            @foreach ($documents as $documentP)
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'document/' . $documentP->id) }}"
                                        class="text-decoration-none h5 m-0"><i
                                            class="fas fa-caret-right text-primary mr-2"></i><small>{{ $documentP->name }}</small>
                                        @if ($document->id == $documentP->id)
                                            <font color="fa9932">(Viendo)</font>
                                        @endif
                                        @if (Auth::check() and \App\Models\MediaDocument::where('document_id',$documentP->id)->where('user_id',Auth::user()->id)->exists())
                                            <i class="fa fa-check text-success mr-2"></i>
                                        @endif
                                    </a>

                                    <a href="{{ url('show-course/' . $course->slug . '/' . 'document/' . $documentP->id) }}"
                                        class="btn btn-outline-secondary btn-sm py-md-2 px-md-4 font-weight-semi-bold mt-2"><i
                                            class="fas fa-play text-primary mr-2"></i></a>
                                </li>
                                {{-- @if ($audioP->description != null)
                                    <li>
                                        <p>{{ substr($audioP->description, 0, 200) }}<a class="h7"
                                                href="{{ url('show-course/' . $course->slug . '/' . 'audio/' . $audioP->id) }}">...
                                                Ver mas</a></p>
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

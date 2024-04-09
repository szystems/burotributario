@extends('layouts.admin')

@section('content')
    <div class="row">

        {{-- <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card background">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <div class="text-center pt-1">
                        <h4 class="mb-0">Dashboard</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div> --}}
                <div class="row mb-4">
                    <div class="col-xl-12">
                        <div class="row">

                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('instructors') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">school</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Instructores') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('course-categories') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">category</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Categorías de Contenidos') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('index-courses') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">local_library</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Contenidos') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('index-subscriptions') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">workspace_premium</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Suscripciones') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('users') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">people_alt</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            {{-- <h6 class="text-center mb-0">Paypal</h6>
                                            <span class="text-xs">Freelance Payment</span> --}}
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Usuarios') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6  p-2">
                                <div class="card">
                                    <a href="{{ url('config') }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">settings</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            {{-- <h6 class="text-center mb-0">Paypal</h6>
                                            <span class="text-xs">Freelance Payment</span> --}}
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Configuración') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 p-2">
                                <div class="card">
                                    <a href="{{ url('show-user/'.Auth::id()) }}">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div
                                                class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">person</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">{{ __('Mi Perfil') }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="horizontal dark my-3">

                <div class="row mb-12">

                    <div class="card-header p-3 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3"><i class="material-icons opacity-10">bar_chart</i> {{ __('Estadisticas') }}</h6>
                        </div>
                    </div>

                    {{-- Suscripciones Activas --}}
                    <div class="col-lg-2 col-md-6 mb-md-3 mb-4 py-3">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-7">
                                        <h5>{{ __('Suscripciones') }} ({{ $totalSuscripciones->count() }})</h5>
                                        <hr class="horizontal dark my-3">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Tipo') }} (Total)
                                                </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Gratis ({{ $totalSuscripcionesGratis->count() }})</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Mensual ({{ $totalSuscripcionesMensuales->count() }})</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Semestral ({{ $totalSuscripcionesSemestrales->count() }})</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Anual ({{ $totalSuscripcionesAnuales->count() }})</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Categoria mas vistos --}}
                    <div class="col-lg-2 col-md-6 mb-md-3 mb-4 py-3">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-7">
                                        <h5>{{ __('Categorías mas vistas') }}</h5>
                                        <hr class="horizontal dark my-3">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Categoria') }} (Vistas)
                                                </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($categoryCourses as $categoryCourse)
                                                @if ($categoryCourse->total_views  > 0 )
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm"><a href="{{ url('show-course-category/'.$categoryCourse->id) }}">{{ $categoryCourse->name }} ({{ $categoryCourse->total_views }})</a></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Cursos mas vistos --}}
                    <div class="col-lg-2 col-md-6 mb-md-0 mb-4 py-3">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-7">
                                        <h5>{{ __('Cursos mas vistos') }}</h5>
                                        <hr class="horizontal dark my-3">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Curso') }} (vistas)
                                                </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($cursosMasVistos as $curso)
                                                <tr>

                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><a href="{{ url('show-course/'.$curso->course_id) }}">{{ $curso->name }} ({{ $curso->total }})</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- Videos mas vistos --}}
                    <div class="col-lg-2 col-md-6 mb-md-0 mb-4 py-3">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-7">
                                        <h5>{{ __('Videos mas vistos') }} ({{ $videosMasVistos->count() }})</h5>
                                        <hr class="horizontal dark my-3">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Video') }} / {{ __('Curso') }}
                                                </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @if ($videosMasVistos->count() > 0)
                                                @foreach ($videosMasVistos as $vistos)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    @php
                                                                        $video = \App\Models\Video::find($vistos->video_id);
                                                                        $curso = \App\Models\Course::find($vistos->course_id);
                                                                    @endphp
                                                                    @if ($video && $curso)
                                                                        <h6 class="mb-0 text-sm">
                                                                            <a href="{{ url('show-course/'.$vistos->course_id) }}">
                                                                                {{ $video->name }} ({{ $vistos->total_visualizaciones }})
                                                                            </a>
                                                                        </h6>
                                                                        <span class="text-xs font-weight">
                                                                            <a href="{{ url('show-course/'.$vistos->course_id) }}">{{ $curso->name }}</a>
                                                                        </span>
                                                                    @else
                                                                        <!-- Manejo de caso cuando no se encuentran los objetos -->
                                                                        <!-- Puedes mostrar un mensaje de error o simplemente omitir esta fila -->
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr><td>No se encontraron resultados.</td></tr>
                                            @endif
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Audios mas escuchados --}}
                    <div class="col-lg-2 col-md-6 mb-md-0 mb-4 py-3">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-7">
                                        <h5>{{ __('Audios mas escuchados') }}</h5>
                                        <hr class="horizontal dark my-3">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Audio') }} / {{ __('Curso') }}
                                                </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @if ($audiosMasEscuchados->count() > 0)
                                                @foreach ($audiosMasEscuchados as $escuchados)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    @php
                                                                        $audio = \App\Models\Audio::find($escuchados->audio_id);
                                                                        $curso = \App\Models\Course::find($escuchados->course_id);
                                                                    @endphp
                                                                    @if ($audio && $curso)
                                                                        <h6 class="mb-0 text-sm">
                                                                            <a href="{{ url('show-course/'.$escuchados->course_id) }}">
                                                                                {{ $audio->name }} ({{ $escuchados->total_visualizaciones }})
                                                                            </a>
                                                                        </h6>
                                                                        <span class="text-xs font-weight">
                                                                            <a href="{{ url('show-course/'.$vistos->course_id) }}">{{ $curso->name }}</a>
                                                                        </span>
                                                                    @else
                                                                        <!-- Manejo de caso cuando no se encuentran los objetos -->
                                                                        <!-- Puedes mostrar un mensaje de error o simplemente omitir esta fila -->
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr><td>No se encontraron resultados.</td></tr>
                                            @endif

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Documentos mas vistos --}}
                    <div class="col-lg-2 col-md-6 mb-md-0 mb-4 py-3">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-7">
                                        <h5>{{ __('Documentos mas vistos') }}</h5>
                                        <hr class="horizontal dark my-3">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Documento') }} / {{ __('Curso') }}
                                                </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @if ($documentosMasVistos->count() > 0)
                                                @foreach ($documentosMasVistos as $docsvistos)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    @php
                                                                        $documento = \App\Models\Document::find($docsvistos->document_id);
                                                                        $curso = \App\Models\Course::find($docsvistos->course_id);
                                                                    @endphp
                                                                    @if ($documento && $curso)
                                                                        <h6 class="mb-0 text-sm">
                                                                            <a href="{{ url('show-course/'.$docsvistos->course_id) }}">
                                                                                {{ $documento->name }} ({{ $docsvistos->total_visualizaciones }})
                                                                            </a>
                                                                        </h6>
                                                                        <span class="text-xs font-weight">
                                                                            <a href="{{ url('show-course/'.$docsvistos->course_id) }}">{{ $curso->name }}</a>
                                                                        </span>
                                                                    @else
                                                                        <!-- Manejo de caso cuando no se encuentran los objetos -->
                                                                        <!-- Puedes mostrar un mensaje de error o simplemente omitir esta fila -->
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr><td>No se encontraron resultados.</td></tr>
                                            @endif

                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

    </div>
@endsection

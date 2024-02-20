@extends('layouts.frontend')
{{-- Trending products --}}
@section('content')

    <!-- Carousel Start -->
    {{-- <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="{{ asset('elearning/img/slide/slide1.jpg') }}" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Los mejores cursos</h5>
                            <h1 class="display-3 text-white mb-md-4">Expertos en consultoria Tributaria y defensa fiscal</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Suscribirse</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="{{ asset('elearning/img/slide/slide2.jpg') }}" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Los mejores cursos</h5>
                            <h1 class="display-3 text-white mb-md-4">Expertos en consultoria Tributaria y defensa fiscal</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Suscribirse</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="{{ asset('elearning/img/carousel-3.jpg') }}" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Learn From Home</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Carousel End -->
    <div class="container">
        @if (isset($errors) && $errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                <ul>
                    @foreach (session()->get('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @if (Auth::guest())
        <!-- Registration Start -->
        <div class="container-fluid bg-registration py-5" style="margin: 15px 0;">
            <div class="container py-5">
                <div class="row align-items-center">

                    <div class="col-lg-4">
                        <div class="card border-0">
                            <div class="card-header bg-light text-center p-2">
                                <h1 class="m-0">Login</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-primary p-0">
                                <form method="POST" action="{{ route('login') }}" class="billing-form ftco-bg-dark p-3 p-md-5">
                                    @csrf
                                    {{-- <h3 class="mb-4 billing-heading"> {{ __('Login') }}</h3> --}}
                                    <div class="row align-items-end">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="firstname" class="h6">{{ __('Email') }}</label>
                                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="lastname" class="h6">{{ __('Password') }}</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <input type="checkbox" onclick="showpassword()"> <label for="" class="h6">{{ __('Mostrar Password') }}</label>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label h6" for="remember">
                                                    {{ __('Recordar mis datos') }}
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <p><button type="submit" class="btn btn-dark py-3 px-4 w-100"><font color="white"><strong>{{ __('Login') }}</strong></font></button></p>
                                            </div>
                                            <a class="h6" href="{{ route('register') }}">{{ __('Crear una cuenta') }}</a><br>
                                            @if (Route::has('password.request'))
                                                <a class="h6" href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
                                            @endif


                                        </div>


                                    </div>
                                </form><!-- END -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0 m-3">
                        <div class="mb-4">
                            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Suscribirse</h5>
                            <h1 class="text-white">10% de descuento en suscripción anual</h1>
                        </div>
                        <p class="text-white">Escoge el plan que mas se adecue a tus necesidades</p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Acceso sin limites</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Acceso a todos los contenidos</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Aprendizaje comprobado</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <div class="card-header bg-light text-center p-4">
                                <h1 class="m-0">Suscripción</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-primary p-5">
                                <form>
                                    {{-- <div class="form-group">
                                        <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select border-0 px-4" style="height: 47px;">
                                            <option selected>Select a course</option>
                                            <option value="1">Course 1</option>
                                            <option value="2">Course 1</option>
                                            <option value="3">Course 1</option>
                                        </select>
                                    </div> --}}
                                    <div>
                                        <a href="{{ url('register') }}" class="btn btn-dark btn-block border-0 py-3">Mensual $.9.99</a>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="{{ url('register') }}" class="btn btn-dark btn-block border-0 py-3">Semestral $.53.99</a>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="{{ url('register') }}" class="btn btn-dark btn-block border-0 py-3" >Anual $.99.99</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Registration End -->
    @else
        @if (! optional(auth()->user())->hasActiveSubscription())
            <!-- Registration Start -->
            <div class="container-fluid bg-registration py-5" style="margin: 15px 0;">
                <div class="container py-5">
                    <div class="row align-items-center">


                        <div class="col-lg-5 mb-5 mb-lg-0 m-3">
                            <div class="mb-4">
                                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Suscribirse</h5>
                                <h1 class="text-white">10% de descuento en suscripción anual</h1>
                            </div>
                            <p class="text-white">Escoge el plan que mas se adecue a tus necesidades</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Acceso sin limites</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Acceso a todos los contenidos</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Aprendizaje comprobado</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="card border-0">
                                <div class="card-header bg-light text-center p-4">
                                    <h1 class="m-0">Suscripción</h1>
                                </div>
                                <div class="card-body rounded-bottom bg-primary p-5">
                                    <form>
                                        {{-- <div class="form-group">
                                            <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select border-0 px-4" style="height: 47px;">
                                                <option selected>Select a course</option>
                                                <option value="1">Course 1</option>
                                                <option value="2">Course 1</option>
                                                <option value="3">Course 1</option>
                                            </select>
                                        </div> --}}
                                        <div>
                                            <a href="{{ url('subscribe') }}" class="btn btn-dark btn-block border-0 py-3">Mensual $.9.99</a>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="{{ url('subscribe') }}" class="btn btn-dark btn-block border-0 py-3">Semestral $.53.99</a>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="{{ url('subscribe') }}" class="btn btn-dark btn-block border-0 py-3">Anual $.99.99</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Registration End -->
        @endif
    @endif

    @if (! optional(auth()->user())->hasActiveSubscription())
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('elearning/img/logos/logo.png') }}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="text-left mb-4">
                            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Nosotros</h5>
                            <h1>Expertos en consultoria Tributaria y defensa fiscal</h1>
                        </div>
                        <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet</p>
                        <a href="{{ url('about') }}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver mas...</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    @endif

    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">{{ __('Contenido') }}</h5>
                <h1>{{ __('Categorías') }}</h1>
            </div>
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('assets/uploads/category_courses/'.$category->image) }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="{{ url('category/'.$category->slug) }}">
                            <h4 class="text-white font-weight-medium">{{ $category->name }}</h4>
                            @php
                                $numCourses = \App\Models\Course::where('category_course_id', $category->id)->where('status', 1)->count();
                            @endphp
                            <span>{{ $numCourses }}
                                @if ($numCourses > 1)
                                    Temas
                                @else
                                    Tema
                                @endif</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Category Start -->


    <!--Popular Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">{{ __('Contenido') }}</h5>
                <h1>{{ __('Contenido Popular') }}</h1>
            </div>
            <div class="row">

                @foreach ($popularCourses as $popular)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        @php
                            $numVideos = \App\Models\Video::where('course_id', $popular->id)->count();
                            $numAudios = \App\Models\Audio::where('course_id', $popular->id)->count();
                            $numDocuments = \App\Models\Document::where('course_id', $popular->id)->count();
                            $catInfo = \App\Models\CategoryCourse::find($popular->category_course_id);
                        @endphp
                        <a href="{{ url('show-course/'.$catInfo->slug.'/'.$popular->slug) }}">
                            <img class="img-fluid" src="{{ asset('assets/uploads/courses/'.$popular->image) }}" alt="">
                        </a>
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                @if ($numVideos > 0)
                                <small class="m-0"><i class="fas fa-video text-primary mr-2"></i>
                                    @if (Auth::check())
                                        @php
                                            $mediaVideos = \App\Models\MediaVideo::where('course_id', $popular->id)->where('user_id', Auth::user()->id)->count()
                                        @endphp
                                        <font color="green"><b>{{ $mediaVideos }}&nbsp;</b></font>/
                                    @endif
                                    {{ $numVideos }}
                                </small>
                                @endif
                                @if ($numAudios > 0)
                                <small class="m-0"><i class="fas fa-podcast text-primary mr-2"></i>
                                    @if (Auth::check())
                                        @php
                                            $mediaAudios = \App\Models\MediaAudio::where('course_id', $popular->id)->where('user_id', Auth::user()->id)->count()
                                        @endphp
                                        <font color="green"><b>{{ $mediaAudios }}&nbsp;</b></font>/
                                    @endif
                                    {{ $numAudios }}
                                </small>
                                @endif
                                @if ($numDocuments > 0)
                                <small class="m-0"><i class="fa fa-file-pdf text-primary mr-2"></i>
                                    @if (Auth::check())
                                        @php
                                            $mediaDocuments = \App\Models\MediaDocument::where('course_id', $popular->id)->where('user_id', Auth::user()->id)->count()
                                        @endphp
                                        <font color="green"><b>{{ $mediaDocuments }}&nbsp;</b></font>/
                                    @endif
                                    {{ $numDocuments }}
                                </small>
                                @endif
                            </div>
                            <a class="h5" href="{{ url('show-course/'.$catInfo->slug.'/'.$popular->slug) }}">{{ $popular->name }}</a><br>
                            <a class="h8" href="{{ url('category/'.$catInfo->slug) }}">{{ $catInfo->name }}</a>


                            {{-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!--Popular Courses End -->

    <!--Last Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">{{ __('Contenido') }}</h5>
                <h1>{{ __('Ultimos Contenidos Agregados') }}</h1>
            </div>
            <div class="row">

                @foreach ($lastCourses as $last)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <a href="{{ url('show-course/'.$catInfo->slug.'/'.$last->slug) }}">
                            <img class="img-fluid" src="{{ asset('assets/uploads/courses/'.$last->image) }}" alt="">
                        </a>

                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                @php
                                    $numVideos = \App\Models\Video::where('course_id', $last->id)->count();
                                    $numAudios = \App\Models\Audio::where('course_id', $last->id)->count();
                                    $numDocuments = \App\Models\Document::where('course_id', $last->id)->count();
                                    $catInfo = \App\Models\CategoryCourse::find($last->category_course_id);
                                @endphp
                                @if ($numVideos > 0)
                                    <small class="m-0"><i class="fas fa-video text-primary mr-2"></i>
                                        @if (Auth::check())
                                            @php
                                                $mediaVideos = \App\Models\MediaVideo::where('course_id', $last->id)->where('user_id', Auth::user()->id)->count()
                                            @endphp
                                            <font color="green"><b>{{ $mediaVideos }}&nbsp;</b></font>/
                                        @endif
                                        {{ $numVideos }}
                                    </small>
                                @endif
                                @if ($numAudios > 0)
                                    <small class="m-0"><i class="fas fa-podcast text-primary mr-2"></i>
                                        @if (Auth::check())
                                            @php
                                                $mediaAudios = \App\Models\MediaAudio::where('course_id', $last->id)->where('user_id', Auth::user()->id)->count()
                                            @endphp
                                            <font color="green"><b>{{ $mediaAudios }}&nbsp;</b></font>/
                                        @endif
                                        {{ $numAudios }}
                                    </small>
                                @endif
                                @if ($numDocuments > 0)
                                    <small class="m-0"><i class="fa fa-file-pdf text-primary mr-2"></i>
                                        @if (Auth::check())
                                            @php
                                                $mediaDocuments = \App\Models\MediaDocument::where('course_id', $popular->id)->where('user_id', Auth::user()->id)->count()
                                            @endphp
                                            <font color="green"><b>{{ $mediaDocuments }}&nbsp;</b></font>/
                                        @endif
                                        {{ $numDocuments }}
                                    </small>
                                @endif
                            </div>
                            <a class="h5" href="{{ url('show-course/'.$catInfo->slug.'/'.$last->slug) }}">{{ $last->name }}</a><br>
                            <a class="h8" href="{{ url('category/'.$catInfo->slug) }}">{{ $catInfo->name }}</a>


                            {{-- <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!--Last Courses End -->


    <Script>
        function showpassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
    </Script>



@endsection



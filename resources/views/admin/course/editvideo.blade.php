@extends('layouts.admin')

<style>
    .progress {
        position:relative;
        width:100%;
        background-color: #c9cfc9
    }
    .bar {
        background-color: #00ff00;
        width:0%;
        height:20px;
    }
    .percent {
        position:absolute;
        display:inline-block;
        left:50%;
        color: #040608;
    }
</style>

@section('content')
    <div class="row">

        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">movie</i>
                    </div>
                    <div class="text-center pt-1">
                        {{-- <p class="text-sm mb-0 text-capitalize">Today's Money</p> --}}
                        <h4 class="mb-0">{{ __('Curso') }}</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                </div>
                <div class="card-body p-3 pt-2">
                    <h4><u>{{ __('Editar') }} {{ __('Video') }}</u></h4>
                    <p><strong><u>{{ __('Course') }}:</u></strong> {{ $course->name }}</p>
                    <p><strong><u>{{ __('Video') }}:</u></strong> {{ $video->name }}</p>
                    @if (count($errors)>0)
                        <div class="alert alert-danger text-white" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ url('update-video/'.$video->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            {{-- <div class="col-md-12 mb-3">
                                <label for="">{{ __('Name') }}</label>
                                <input readonly type="text" class="form-control border px-2 " name="name" value="{{ $video->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('name') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div> --}}
                            {{-- <div class="col-md-12 mb-3">
                                <label for="">{{ __('Description') }}</label>
                                <textarea readonly name="description" cols="30" rows="5" class="form-control border px-2 ">{{ $video->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('description') }}</font>
                                            </strong>
                                    </span>
                                @endif
                            </div> --}}

                            <div class="col-md-12 mb-3">
                                <label for="">{{ __('Cambiar Video') }}</label>
                                <input type="file" name="file_video" class="form-control border">
                                @if ($errors->has('file_video'))
                                    <span class="help-block opacity-7">
                                            <strong>
                                                <font color="red">{{ $errors->first('file_video') }}</font>
                                            </strong>
                                    </span>
                                @endif
                                <br>
                                <div class="col-md-12 mb-3 progress">
                                    <div class="bar"></div>
                                    <div class="percent">0%</div>
                                </div>
                            </div>
                            @if ($video->file_video)
                            <div class="col-md-9 mb-3">
                                {{-- <label for="">{{ __('Image') }}</label> --}}
                                <video width="320" height="240" controls>
                                    <source src="{{ asset('assets/uploads/videos/'.$video->file_video) }}" type="video/mp4">
                                    <source src="{{ asset('assets/uploads/videos/'.$video->file_video) }}" type="video/ogg">
                                    {{ __('Your browser does not support the video tag.') }}
                                </video>
                            </div>
                            @endif

                            <div class="col-md-12 mb-3" >
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <textarea hidden name="description" cols="30" rows="5" class="form-control border px-2 ">{{ $video->description }}</textarea>
                                <input hidden type="text" class="form-control border px-2 " name="name" value="{{ $video->name }}">
                                <button type="submit" class="btn btn-success"><i class="material-icons">save</i> {{ __('Grabar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> --}}
                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

    <script type="text/javascript">
        var SITEURL = "{{URL('/')}}";
        $(function () {
            $(document).ready(function () {
                var bar = $('.bar');
                var percent = $('.percent');
                $('form').ajaxForm({
                    beforeSend: function () {
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },
                    complete: function (xhr) {
                        alert('File Has Been Uploaded Successfully');
                        window.location.href = SITEURL + "/" + "show-course/" + {{ $course->id }};
                    }
                });
            });
        });
    </script>
@endsection

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config;
use App\Models\Instructor;
use App\Models\CategoryCourse;
use App\Models\Course;
use App\Models\CourseInstructor;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Document;
use App\Models\Currency;
use App\Models\PaymentPlatform;
use App\Models\MediaDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;
use Session;
use DB;
use Agent;

class FrontendController extends Controller
{
    public function index()
    {
        $config = Config::first();
        $categories = CategoryCourse::where('status', 1)->where('show', 1)->orderby('created_at','asc')->get();
        $popularCourses = Course::where('status', 1)->where('show', 1)->where('popular', 1)->orderby('updated_at','desc')->take(6)->get();
        $lastCourses = Course::where('status', 1)->where('show', 1)->orderby('updated_at','desc')->take(6)->get();
        return view('frontend.index', compact('config','categories','popularCourses','lastCourses'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function teachers()
    {
        $teachers = Instructor::all();
        return view('frontend.teachers', compact('teachers'));
    }



    public function contact()
    {
        $config = Config::first();
        return view('frontend.contact', compact('config'));
    }

    public function sendcontact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $mensaje = $request->input('mensaje');

        $config = Config::first();
        $mail_to = $config->email;

        Mail::to($mail_to)->send(new Contacto($name,$email,$subject,$mensaje,$mail_to,$config));

        Session::flash('message', 'Gracias por contactarte, pronto nos comunicaremos contigo.');
        Session::flash('alert-class', 'alert-success');

        return view('frontend.contact', compact('config'))->with('status',"Mensaje enviado.");
    }

    public function showcategories()
    {
        $categories=CategoryCourse::where('status',1)->where('show',1)->orderBy('name','asc')->paginate(12);
        return view('frontend.categories', compact('categories'));
    }

    public function showcategorycourses($slug)
    {
        if((CategoryCourse::where('slug', $slug)->where('show',1)->exists()))
        {
            $category = CategoryCourse::where('slug', $slug)->first();
            $categoryCourses = Course::where('category_course_id', $category->id)->where('show','1')->orderby('name','asc')->get();
            $config = Config::first();
            return view('frontend.category', compact('category','categoryCourses','config'));
        }
        else
        {
            return redirect('/')->with('status',"Esta categoría no existe.");
        }

    }

    public function courses(Request $request)
    {
        if ($request)
        {
            $queryCourse=$request->input('fcourse');
            $courses=Course::where('name','LIKE','%'.$queryCourse.'%')->where('show',1)->orderBy('name','asc')->paginate(12);
            $filterCategories = CategoryCourse::where('status', 1)->where('show',1)->get();
            $filterCourses = Course::Where('status', 1)->get();
            $popularCourses = Course::where('status', 1)->where('show', 1)->where('popular', 1)->orderby('updated_at','desc')->take(10)->get();
            $lastCourses = Course::where('status', 1)->where('show', 1)->orderby('updated_at','desc')->take(10)->get();
            return view('frontend.courses', compact('courses','queryCourse','filterCategories','filterCourses','popularCourses','lastCourses'));
        }
    }

    public function showcourse($category_slug, $course_slug)
    {
        if(CategoryCourse::where('slug', $category_slug)->where('show',1)->exists())
        {
            if(Course::where('slug', $course_slug)->where('show',1)->exists())
            {
                $course = Course::where('slug', $course_slug)->first();
                $videos = Video::where('course_id',$course->id)->get();
                $audios = Audio::where('course_id',$course->id)->get();
                $documents = Document::where('course_id',$course->id)->get();
                $instructors = CourseInstructor::where('course_id',$course->id)->get();
                $config = Config::first();
                return view('frontend.course', compact('course','config','videos','audios','documents','instructors'));
            }
            else
            {
                return redirect('/')->with('status',"Este curso no existe.");
            }
        }
        else
        {
            return redirect('/')->with('status',"Esta categoría no existe.");
        }
    }

    public function showvideo($course_slug, $video_id)
    {
        if(Course::where('slug', $course_slug)->where('show',1)->exists())
        {
            if(Video::where('id', $video_id)->exists())
            {
                $course = Course::where('slug', $course_slug)->first();
                $video = Video::find($video_id);
                $videos = Video::where('course_id',$course->id)->get();
                $audios = Audio::where('course_id',$course->id)->get();
                $documents = Document::where('course_id',$course->id)->get();
                $config = Config::first();
                return view('frontend.video', compact('course','config','video','videos','audios','documents'));
            }
            else
            {
                return redirect('/')->with('status',"Este video no existe.");
            }
        }
        else
        {
            return redirect('/')->with('status',"Esta video no existe.");
        }
    }

    public function showaudio($course_slug, $audio_id)
    {
        if(Course::where('slug', $course_slug)->where('show',1)->exists())
        {
            if(Audio::where('id', $audio_id)->exists())
            {
                $course = Course::where('slug', $course_slug)->first();
                $audio = Audio::find($audio_id);
                $videos = Video::where('course_id',$course->id)->get();
                $audios = Audio::where('course_id',$course->id)->get();
                $documents = Document::where('course_id',$course->id)->get();
                $config = Config::first();
                return view('frontend.audio', compact('course','config','audio','videos','audios','documents'));
            }
            else
            {
                return redirect('/')->with('status',"Este audio no existe.");
            }
        }
        else
        {
            return redirect('/')->with('status',"Esta audio no existe.");
        }
    }

    public function showdocument(Request $request, $course_slug, $document_id)
    {
        if(Course::where('slug', $course_slug)->where('show',1)->exists())
        {
            if(Document::where('id', $document_id)->exists())
            {
                $course = Course::where('slug', $course_slug)->first();
                $document = Document::find($document_id);
                $videos = Video::where('course_id',$course->id)->get();
                $audios = Audio::where('course_id',$course->id)->get();
                $documents = Document::where('course_id',$course->id)->get();
                $config = Config::first();

                if(Auth::check())
                {
                    $user_id = Auth::id();
                    $course_id = $course->id;

                    if(MediaDocument::where('document_id',$document_id)->where('user_id',$user_id)->exists())
                    {

                    }else
                    {
                        $mediadocument = new MediaDocument();
                        $mediadocument->document_id = $document_id;
                        $mediadocument->course_id = $course_id;
                        $mediadocument->user_id = Auth::id();
                        $mediadocument->save();
                    }
                }

                return view('frontend.document', compact('course','config','document','videos','audios','documents'));
            }
            else
            {
                return redirect('/')->with('status',"Este audio no existe.");
            }
        }
        else
        {
            return redirect('/')->with('status',"Esta audio no existe.");
        }
    }

    public function checkout()
    {
        $currencies = Currency::all();
        $paymentPlatforms = PaymentPlatform::all();
        return view('frontend.checkout', compact('currencies','paymentPlatforms'));
    }




}

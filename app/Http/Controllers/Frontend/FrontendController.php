<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config;
use App\Models\CategoryCourse;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Session;
use DB;

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
        $contact_message = $request->input('contact_message');
        $mail_to = 'info@bocacostacoffee.com';
        $config = Config::first();

        Mail::to($mail_to)->send(new Contact($name,$email,$subject,$contact_message,$mail_to,$config));

        Session::flash('message', 'Thank you for contacting us. We will be in touch soon.');
        Session::flash('alert-class', 'alert-success');

        return view('frontend.contact', compact('config'));
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

    public function showcourse($category_slug, $course_slug)
    {
        if(CategoryCourse::where('slug', $category_slug)->where('show',1)->exists())
        {
            if(Course::where('slug', $course_slug)->where('show',1)->exists())
            {
                $course = Course::where('slug', $course_slug)->first();
                $config = Config::first();
                return view('frontend.course', compact('course','config'));
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

}

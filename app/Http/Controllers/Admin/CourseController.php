<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoryCourse;
use App\Models\Course;
use App\Models\CourseInstructor;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Document;
use App\Http\Requests\CourseFormRequest;
use App\Http\Requests\VideoFormRequest;
use App\Http\Requests\AudioFormRequest;
use App\Http\Requests\DocumentFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $queryCourse=$request->input('fcourse');
            $queryCategory=$request->input('fcategory');
            $courses=Course::where('status','=',1)
            ->where('name','LIKE','%'.$queryCourse.'%')
            ->where('category_course_id','LIKE',$queryCategory)
            ->orderBy('category_course_id','asc')
            ->get();
            $filterCategories = CategoryCourse::where('status', 1)->get();
            $filterCourses = Course::Where('status', 1)->get();
            return view('admin.course.index', compact('courses','queryCourse','queryCategory','filterCategories','filterCourses'));
        }
    }

    public function show($id)
    {
        $course = Course::find($id);
        $videos = Video::where('course_id',$id)->get();
        $audios = Audio::where('course_id',$id)->get();
        $documents = Document::where('course_id',$id)->get();
        $instructors = CourseInstructor::where('course_id',$id)->get();
        return view('admin.course.show', compact('course','videos','audios','documents','instructors'));
    }

    public function add()
    {
        $filterCategories = CategoryCourse::where('status',1)->get();
        return view('admin.course.add', compact('filterCategories'));
    }

    public function insert(CourseFormRequest $request)
    {
        $course = new Course();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/courses',$filename);
            $course->image = $filename;
        }

        if($request->hasFile('file_pdf'))
        {
            $file1 = $request->file('file_pdf');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$ext1;
            $file1->move('assets/uploads/courses_pdf',$filename1);
            $course->file_pdf = $filename1;
        }

        $name_course = $request->input('name');
        $slug = str_replace(' ', '-', $name_course);

        $course->category_course_id = $request->input('category_course_id');
        $course->name = $request->input('name');
        $course->slug = $slug;
        $course->description = $request->input('description');
        $course->show = $request->input('show') == TRUE ? '1':'0';
        $course->popular = $request->input('popular') == TRUE ? '1':'0';
        $course->status = 1;
        $course->save();

        if(Course::where('slug',$course->slug)->where('id','!=',$course->id)->exists())
        {
            $slug = $course->slug.'-'.$course->id;
            $course->slug = $slug;
            $course->update();

        }

        // return redirect('index-courses')->with('status', __('Course Added Successfully'));
        return redirect('show-course/'.$course->id)->with('status', __('Curso agregado correctamente'));
    }

    public function edit($id)
    {
        $course = Course::find($id);
        $filterCategories = CategoryCourse::where('status',1)->get();
        return view('admin.course.edit', compact('course','filterCategories'));
    }

    public function update(CourseFormRequest $request, $id)
    {
        $course = Course::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/courses/'.$course->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/courses',$filename);
            $course->image = $filename;
        }

        if($request->hasFile('file_pdf'))
        {
            $path1 = 'assets/uploads/courses/'.$course->file_pdf;
            if(File::exists($path1))
            {
                File::delete($path1);
            }
            $file1 = $request->file('file_pdf');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$ext1;
            $file1->move('assets/uploads/courses_pdf',$filename1);
            $course->file_pdf = $filename1;
        }

        $name_course = $request->input('name');
        $slug = str_replace(' ', '-', $name_course);

        $course->category_course_id = $request->input('category_course_id');
        $course->name = $request->input('name');
        $course->slug = $slug;
        $course->description = $request->input('description');
        $course->show = $request->input('show') == TRUE ? '1':'0';
        $course->popular = $request->input('popular') == TRUE ? '1':'0';
        $course->update();

        if(Course::where('slug',$course->slug)->where('id','!=',$course->id)->exists())
        {
            $slug = $course->slug.'-'.$course->id;
            $course->slug = $slug;
            $course->update();

        }

        return redirect('index-courses')->with('status',__('Curso actualizado correctamente'));
    }

    public function destroy($id)
    {

        $course = Course::find($id);
        $path = 'assets/uploads/courses/'.$course->image;
        if(File::exists($path))
            {
                File::delete($path);
            }
        //borrar videos
        $videos = Video::where('course_id',$course->id)->get();
        foreach ($videos as $video){
            $path = 'assets/uploads/videos/'.$video->file_video;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $video->delete();
        }
        //borrar audios
        $audios = Audio::where('course_id',$course->id)->get();
        foreach ($audios as $audio){
            $path = 'assets/uploads/audios/'.$audio->file_audio;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $audio->delete();
        }
        //borrar curso
        $course->delete();


        return redirect('index-courses')->with('status',__('Curso eliminado correctamente'));
    }
}

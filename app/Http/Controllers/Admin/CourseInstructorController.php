<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\CourseInstructor;

class CourseInstructorController extends Controller
{
    public function insert(Request $request)
    {
        $course = $request->input('course_id');
        $instructor = $request->input('instructor_id');
        if (!CourseInstructor::where('course_id',$course)->where('instructor_id',$instructor)->exists()) {
            $courseInstructor = new CourseInstructor();

            $courseInstructor->course_id = $request->input('course_id');
            $courseInstructor->instructor_id = $request->input('instructor_id');
            $courseInstructor->save();
            return redirect('show-course/'.$course)->with('status', __('Instructor agregado correctamente al curso'));
        }else {
            return redirect('show-course/'.$course)->with('status', __('Instructor ya existe en este curso'));
        }
    }

    public function destroy($id)
    {
        $courseInstructor = CourseInstructor::find($id);
        $course = Course::find($courseInstructor->course_id);
        $courseInstructor->delete();
        return redirect('show-course/'.$course->id)->with('status', __('Instructor eliminado de curso correctamente'));
    }
}

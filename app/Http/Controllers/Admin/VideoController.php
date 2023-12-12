<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoryCourse;
use App\Models\Course;
use App\Models\Video;
use App\Models\Audio;
use App\Models\MediaVideo;
use App\Http\Requests\VideoFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;

class VideoController extends Controller
{
    public function insert(VideoFormRequest $request)
    {
        $video = new Video();
        if($request->hasFile('file_video'))
        {


            $file = $request->file('file_video');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/videos',$filename);
            $video->file_video = $filename;
        }

        $video->course_id = $request->input('course_id');
        $video->name = $request->input('name');
        $video->description = $request->input('description');
        $video->save();

        // return redirect('show-course/'.$request->input('course_id'))->with('status', __('Video Added Successfully'));
        return response()->json(['success'=>'Video agregado correctamente']);
    }

    public function add($id)
    {
        $course = Course::find($id);
        return view('admin.course.addvideo', compact('course'));
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $course = Course::find($video->course_id);
        return view('admin.course.editvideo', compact('course','video'));
    }

    public function update(VideoFormRequest $request, $id)
    {

        $video = Video::find($id);
        if($request->hasFile('file_video'))
        {


            $path = 'assets/uploads/videos/'.$video->file_video;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('file_video');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/videos',$filename);
            $video->file_video = $filename;
        }
        $video->name = $request->input('name');
        $video->description = $request->input('description');
        $video->update();

        // if ($request->input('editmodal') == 1) {
            return redirect('show-course/'.$request->input('course_id'))->with('status', __('Video actualizado correctamente'));
        // } else {
        //     return response()->json(['success'=>'Video edited Succesfully']);
        // }

    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $course = Course::find($video->course_id);
        $path = 'assets/uploads/videos/'.$video->file_video;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $video->delete();
        return redirect('show-course/'.$course->id)->with('status', __('Video eliminado correctamente'));
    }

    public function addmedia(Request $request)
    {
        if(Auth::check())
        {
            $user_id = $request->input('user_id');
            $course_id = $request->input('course_id');
            $video_id = $request->input('video_id');


            if(MediaVideo::where('video_id',$video_id)->where('user_id',$user_id)->exists())
            {
                return response()->json();
            }else
            {
                $mediavideo = new MediaVideo();
                $mediavideo->video_id = $video_id;
                $mediavideo->course_id = $course_id;
                $mediavideo->user_id = Auth::id();
                $mediavideo->save();
                return response()->json(['status' => "Felicidades terminaste de ver el video"]);
            }
        }else
        {
            return response()->json();
        }
    }

    public function resetvideo(Request $request)
    {
        if(Auth::check())
        {
            $user_id = $request->input('user_id');
            $course_id = $request->input('course_id');
            $mediavideos =  MediaVideo::where('user_id', $user_id)->where('course_id',$course_id)->get();
            if ($mediavideos->count() != 0) {
                foreach ($mediavideos as $mediavideo) {
                    $mediavideo->delete();
                }
            }
            $course = Course::find($course_id);
            $category = CategoryCourse::find($course->category_course_id);
            return redirect('show-course/'.$category->slug.'/'.$course->slug)->with('status',"Se resetearon los videos vistos de este curso");
        }
    }
}

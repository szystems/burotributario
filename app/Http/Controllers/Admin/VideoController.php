<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Video;
use App\Http\Requests\VideoFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use DB;

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

        return redirect('show-course/'.$request->input('course_id'))->with('status', __('Video Added Successfully'));
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

        return redirect('show-course/'.$request->input('course_id'))->with('status', __('Video updated Successfully'));
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $course = Course::find($video->course_id);
        $video->delete();
        return redirect('show-course/'.$course->id)->with('status', __('Video Deleted Successfully'));
    }
}

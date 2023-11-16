<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Audio;
use App\Http\Requests\AudioFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use DB;

class AudioController extends Controller
{
    public function insert(AudioFormRequest $request)
    {
        $audio = new Audio();
        if($request->hasFile('file_audio'))
        {
            $file = $request->file('file_audio');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/audios',$filename);
            $audio->file_audio = $filename;
        }

        $audio->course_id = $request->input('course_id');
        $audio->name = $request->input('name');
        $audio->description = $request->input('description');
        $audio->save();

        return redirect('show-course/'.$request->input('course_id'))->with('status', __('Audio Added Successfully'));
    }

    public function update(AudioFormRequest $request, $id)
    {
        $audio = Audio::find($id);
        if($request->hasFile('file_audio'))
        {
            $path = 'assets/uploads/audios/'.$audio->file_audio;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('file_audio');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/audios',$filename);
            $audio->file_audio = $filename;
        }
        $audio->name = $request->input('name');
        $audio->description = $request->input('description');
        $audio->update();

        return redirect('show-course/'.$request->input('course_id'))->with('status', __('Audio updated Successfully'));
    }

    public function destroy($id)
    {
        $audio = Audio::find($id);
        $course = Course::find($audio->course_id);
        $audio->delete();
        return redirect('show-course/'.$course->id)->with('status', __('Audio Deleted Successfully'));
    }
}

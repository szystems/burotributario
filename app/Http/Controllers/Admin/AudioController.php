<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoryCourse;
use App\Models\Course;
use App\Models\Audio;
use App\Models\Video;
use App\Models\MediaAudio;
use App\Http\Requests\AudioFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;

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

        // return redirect('show-course/'.$request->input('course_id'))->with('status', __('Video Added Successfully'));
        return response()->json(['success'=>'Audio agregado correctamente']);
    }

    public function add($id)
    {
        $course = Course::find($id);
        return view('admin.course.addaudio', compact('course'));
    }

    public function edit($id)
    {
        $audio = Audio::find($id);
        $course = Course::find($audio->course_id);
        return view('admin.course.editaudio', compact('course','audio'));
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

        // if ($request->input('editmodal') == 1) {
            return redirect('show-course/'.$request->input('course_id'))->with('status', __('Audio actualizado correctamente'));
        // } else {
        //     return response()->json(['success'=>'Video edited Succesfully']);
        // }

    }

    public function destroy($id)
    {
        $audio = Audio::find($id);
        $course = Course::find($audio->course_id);
        $path = 'assets/uploads/audios/'.$audio->file_audio;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $audio->delete();
        return redirect('show-course/'.$course->id)->with('status', __('Audio eliminado correctamente'));
    }

    public function addmedia(Request $request)
    {
        if(Auth::check())
        {
            $user_id = $request->input('user_id');
            $course_id = $request->input('course_id');
            $audio_id = $request->input('audio_id');


            if(MediaAudio::where('audio_id',$audio_id)->where('user_id',$user_id)->exists())
            {
                return response()->json();
            }else
            {
                $mediaaudio = new MediaAudio();
                $mediaaudio->audio_id = $audio_id;
                $mediaaudio->course_id = $course_id;
                $mediaaudio->user_id = Auth::id();
                $mediaaudio->save();
                return response()->json(['status' => "Felicidades terminaste de escuchar el audio"]);
            }
        }else
        {
            return response()->json();
        }
    }

    public function resetaudio(Request $request)
    {
        if(Auth::check())
        {
            $user_id = $request->input('user_id');
            $course_id = $request->input('course_id');
            $mediaaudios =  MediaAudio::where('user_id', $user_id)->where('course_id',$course_id)->get();
            if ($mediaaudios->count() != 0) {
                foreach ($mediaaudios as $mediaaudio) {
                    $mediaaudio->delete();
                }
            }
            $course = Course::find($course_id);
            $category = CategoryCourse::find($course->category_course_id);
            return redirect('show-course/'.$category->slug.'/'.$course->slug)->with('status',"Se resetearon los audios escuchados de este curso");
        }
    }
}

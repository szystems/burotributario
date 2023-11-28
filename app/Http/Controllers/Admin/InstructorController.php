<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Instructor;
use App\Http\Requests\InstructorFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use DB;

class InstructorController extends Controller
{
    public function index(Request $request)
    {
        if($request)
        {
            $queryInstructor=$request->input('finstructor');
            $instructors=DB::table('instructors')
            ->where('name','LIKE','%'.$queryInstructor.'%')
            ->orderBy('name','asc')
            ->paginate(25);
            $filterInstructors = Instructor::all();
            return view('admin.instructor.index', compact('instructors','queryInstructor','filterInstructors'));
        }

    }

    public function show($id)
    {
        $instructor = Instructor::find($id);
        return view('admin.instructor.show', compact('instructor'));
    }

    public function add()
    {
        return view('admin.instructor.add');
    }

    public function insert(InstructorFormRequest $request)
    {
        $instructor = new Instructor();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/instructors',$filename);
            $instructor->image = $filename;
        }

        $instructor->name = $request->input('name');
        $instructor->description = $request->input('description');
        $instructor->facebook = $request->input('facebook');
        $instructor->twitter = $request->input('twitter');
        $instructor->instagram = $request->input('instagram');
        $instructor->linkedin = $request->input('linkedin');
        $instructor->save();

        return redirect('instructors')->with('status', __('Instructor agregado correctamente'));
    }

    public function edit($id)
    {
        $instructor = Instructor::find($id);
        return view('admin.instructor.edit', \compact('instructor'));
    }

    public function update(InstructorFormRequest $request, $id)
    {
        $instructor = Instructor::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/instructors/'.$instructor->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/instructors',$filename);
            $instructor->image = $filename;
        }

        $instructor->name = $request->input('name');
        $instructor->description = $request->input('description');
        $instructor->facebook = $request->input('facebook');
        $instructor->twitter = $request->input('twitter');
        $instructor->instagram = $request->input('instagram');
        $instructor->linkedin = $request->input('linkedin');
        $instructor->update();

        return redirect('instructors')->with('status',__('Instructor actualizado correctamente'));
    }

    public function destroy($id)
    {
        $instructor = Instructor::find($id);
        $path = 'assets/uploads/instructors/'.$instructor->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $instructor->delete();
        return redirect('instructors')->with('status',__('Instructor eliminado correctamente'));
    }
}

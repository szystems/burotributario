<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CategoryCourse;
use App\Models\Course;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Document;
use App\Models\MediaDocument;
use App\Http\Requests\DocumentFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;

class DocumentController extends Controller
{
    public function insert(DocumentFormRequest $request)
    {
        $document = new Document();
        if($request->hasFile('file_pdf'))
        {


            $file = $request->file('file_pdf');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/pdfs',$filename);
            $document->file_pdf = $filename;
        }

        $document->course_id = $request->input('course_id');
        $document->name = $request->input('name');
        $document->description = $request->input('description');
        $document->save();

        return redirect('show-course/'.$request->input('course_id'))->with('status', __('Documento agregado correctamente'));
    }

    public function add($id)
    {
        $course = Course::find($id);
        return view('admin.course.adddocument', compact('course'));
    }

    public function edit($id)
    {
        $video = Document::find($id);
        $course = Course::find($document->course_id);
        return view('admin.course.editdocument', compact('course','document'));
    }

    public function update(DocumentFormRequest $request, $id)
    {

        $document = Document::find($id);
        if($request->hasFile('file_pdf'))
        {


            $path = 'assets/uploads/pdfs/'.$document->file_pdf;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('file_pdf');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/pdfs',$filename);
            $document->file_pdf = $filename;
        }
        $document->name = $request->input('name');
        $document->description = $request->input('description');
        $document->update();

        return redirect('show-course/'.$request->input('course_id'))->with('status', __('Documento actualizado correctamente'));
    }

    public function destroy($id)
    {
        $document = Document::find($id);
        $course = Course::find($document->course_id);
        $path = 'assets/uploads/pdfs/'.$document->file_pdf;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $document->delete();
        return redirect('show-course/'.$course->id)->with('status', __('Documento eliminado correctamente'));
    }

    public function resetdocument(Request $request)
    {
        if(Auth::check())
        {
            $user_id = $request->input('user_id');
            $course_id = $request->input('course_id');
            $mediadocuments =  MediaDocument::where('user_id', $user_id)->where('course_id',$course_id)->get();
            if ($mediadocuments->count() != 0) {
                foreach ($mediadocuments as $mediadocument) {
                    $mediadocument->delete();
                }
            }
            $course = Course::find($course_id);
            $category = CategoryCourse::find($course->category_course_id);
            return redirect('show-course/'.$category->slug.'/'.$course->slug)->with('status',"Se resetearon los documentos vistos de este curso");
        }
    }
}

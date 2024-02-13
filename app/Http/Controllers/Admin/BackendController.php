<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Subscription;
use App\Models\MediaVideo;
use App\Models\MediaAudio;
use App\Models\MediaDocument;

use Illuminate\Support\Facades\Auth;
use App\Models\Config;
use DB;

class BackendController extends Controller
{
    public function index()
    {

        $config = Config::first();

        $videosMasVistos = MediaVideo::select('video_id', 'course_id', DB::raw('SUM(1) as total_visualizaciones'))
        ->groupBy('video_id', 'course_id')
        ->orderByDesc('total_visualizaciones')
        ->get();

        $audiosMasEscuchados = MediaAudio::select('audio_id', 'course_id', DB::raw('SUM(1) as total_escuchas'))
        ->groupBy('audio_id', 'course_id')
        ->orderByDesc('total_escuchas')
        ->get();

        $documentosMasVistos = MediaDocument::select('document_id', 'course_id', DB::raw('SUM(1) as total_vistas'))
        ->groupBy('document_id', 'course_id')
        ->orderByDesc('total_vistas')
        ->get();

        $cursosMasVistos = DB::table(function ($query) {
            $query->select('courses.name', 'media_videos.course_id', DB::raw('count(*) as total'))
                ->from('media_videos')
                ->join('courses', 'courses.id', '=', 'media_videos.course_id')
                ->groupBy('courses.name', 'media_videos.course_id')
                ->unionAll(function ($query) {
                    $query->select('courses.name', 'media_audios.course_id', DB::raw('count(*) as total'))
                        ->from('media_audios')
                        ->join('courses', 'courses.id', '=', 'media_audios.course_id')
                        ->groupBy('courses.name', 'media_audios.course_id');
                })
                ->unionAll(function ($query) {
                    $query->select('courses.name', 'media_documents.course_id', DB::raw('count(*) as total'))
                        ->from('media_documents')
                        ->join('courses', 'courses.id', '=', 'media_documents.course_id')
                        ->groupBy('courses.name', 'media_documents.course_id');
                });
        }, 'sub')
        ->orderBy('total', 'desc')
        ->get();

        $categoryCourses = DB::table('category_courses')
        ->select('category_courses.id', 'category_courses.name', DB::raw('COUNT(media_videos.id) + COUNT(media_audios.id) as total_views'))
        ->join('courses', 'courses.category_course_id', '=', 'category_courses.id')
        ->leftJoin('media_videos', 'media_videos.course_id', '=', 'courses.id')
        ->leftJoin('media_audios', 'media_audios.course_id', '=', 'courses.id')
        ->groupBy('category_courses.id', 'category_courses.name')
        ->orderBy('total_views', 'desc')
        ->get();


        $totalSuscripciones = Subscription::all();
        $totalSuscripcionesGratis = Subscription::where('plan_id', 1)->get();
        $totalSuscripcionesMensuales = Subscription::where('plan_id', 2)->get();
        $totalSuscripcionesSemestrales = Subscription::where('plan_id', 3)->get();
        $totalSuscripcionesAnuales = Subscription::where('plan_id', 4)->get();

        return view('admin.index', compact('config','videosMasVistos','audiosMasEscuchados','documentosMasVistos','cursosMasVistos','categoryCourses','totalSuscripciones','totalSuscripcionesGratis','totalSuscripcionesMensuales','totalSuscripcionesSemestrales','totalSuscripcionesAnuales'));
    }
}

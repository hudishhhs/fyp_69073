<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        $currentLesson = $lessons->first(); // set the first lesson as the default

        return view('lessons.index', compact('lessons', 'currentLesson'));
    }

    public function show($id)
{

    $lessons = Lesson::all();
    $lesson = Lesson::findOrFail($id);
    $currentLesson = $lesson;  

    return view('lessons.show', compact('lessons', 'currentLesson'));
}

}

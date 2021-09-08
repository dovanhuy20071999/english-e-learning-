<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Word;

class LessonController extends Controller
{
    public function showLessonDetail($id)
    {
        $words = Word::where('lesson_id', $id)->get();

        return view('pages.user.lesson_detail', compact('words'));
    }
}

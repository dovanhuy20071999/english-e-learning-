<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizes;

class QuizController extends Controller
{
    public function index()
    {
        $quizes= Quizes::orderBy('id','asc')->paginate(5);
        
        return view('pages.user.exam.quiz_list', compact('quizes'));
    }
}

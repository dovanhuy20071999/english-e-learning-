<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Word;
use App\Models\User;
use App\Models\User_word;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.user.home');
    }

    public function myProfile($id)
    {
        $datas = User::where('id', $id)->get();

        return view('pages.user.profile', compact('datas'));
    }

    public function showCourse()
    {
        $courses=Course::with('image')->orderBy('created_at')->get(); //ap dung eager loading
        
        return view('pages.user.courses_list', compact('courses'));
    }

    public function showLesson($id)
    {
        $lessons=Lesson::orderBy('id','asc')->where('course_id',$id)->get();
        $course=Course::where('id', $id)->first();
        
        return view('pages.user.lesson_list', compact('lessons','course'));
    }

    public function showWordList()
    {
        $words = Word::all();

        return view('pages.user.word_list', compact('words'));
    }

    public function sortWordAlphabet()
    {
        $words = Word::orderBy('Word')->get();

        return view('pages.user.word_list', compact('words'));
    }

    public function showTopicToFilter()
    {
        $topics = Course::all();

        return view('pages.user.filter_by_topic', compact('topics'));
    }

    public function sortWordByTopic($id)
    {
        // $words = Lesson::with('words')->where('course_id', $id)->get();
        $id_lesson = Lesson::where('course_id', $id)->get();
        $words=array();
        foreach ($id_lesson as $id)
        {
            $word = Word::where('lesson_id',$id->id)->get();
            array_push($words, $word);
        }

        $word_array=array();
        $mean_array=array();
        foreach($words as $word)
        {
            array_push($word_array, $word->word);
            array_push($mean_array, $word->mean);
        }
        dd($word_array);

        return view('pages.user.word_list_by_topic', compact('words'));
    }

    public function myWord($id)
    {
        $word_ids = User_word::where('user_id', $id)->get();
        $ids = array();
        foreach ($word_ids as $word_id) {
            $id=$word_id->word_id;
            array_push($ids, $id);
        }

        $words = array();
        $means = array();
        // foreach ($ids as $key => $value) {
        //     $word = Word::where('id', $id)->get();
        //     foreach ($word as $w) {
        //         $wo = $w->word;
        //     }
        //     array_push($words, $wo);
        // }

        for ($i=0; $i < count($ids) ; $i++) { 
            $word=DB::table('words')->where('id',$ids[$i])->get();
            foreach($word as $wo)
            {
                $w = $wo->word;
                $m = $wo->mean;
            }
            array_push($words, $w);
            array_push($means, $m);
        }

        return view('pages.user.word_list_learned', compact('words','means'));
    }
}

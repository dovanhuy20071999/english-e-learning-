<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quizes;
use App\Models\Exams;
use App\Models\Results;
use Illuminate\Support\Facades\Auth;
use App\Enums\QuizStatus;

class ExamController extends Controller
{
    public function exam($id)
    {
        $quiz=Quizes::where('id',$id)->where('status', 'active')->first();
        $questions=Question::inRandomOrder()->limit($quiz->number_of_question)->where('quizes_id',$quiz->id)->get();

        return view('pages.user.exam.exam',compact('questions','quiz'));
    }

    public function examPost(Request $request)
    {
        $userId=Auth::id();
        $date=date('Y-m-d');
        $yes=0;
        $no=0;
        $data=$request->all();
      
        for($i=1; $i<=$request->index;$i++){
           if(isset($data['questions_id'.$i]))
           {
                $exam=new Exams;
                $question=Question::where('id',$data['questions_id'.$i])->get()->first();
                if($question->answer==$data['ans'.$i])
                {
                   $result[$data['questions_id'.$i]]='Yes';
                   $exam->is_ans="yes";
                   $yes++;
                }else{
                   $result[$data['questions_id'.$i]]='No';
                   $exam->is_ans="No";
                   $no++;
                }
                $exam->user_id= $userId;
                $exam->quizes_id= $question->quizes_id;
                $exam->questions_id=$data['questions_id'.$i];
                $exam->ans=$data['ans'.$i];
                $exam->save();
           }    
       }
       if($res=Results::where('user_id',$userId)->where('quizes_id',$request->quizes_id)->first()){
       }else{
            $res=new Results;
       }
       $res->user_id= $userId;
       $res->quizes_id= $request->quizes_id;
       $res->date= $date;
       $res->yes_ans=$yes;
       $res->no_ans=$no;
       $res->save();

       return redirect()->route('exam.result');
    }

    public function examResult()
    {
      $userId=Auth::id();
      $results=Results::orderBy('id','desc')->where('user_id',$userId)->paginate(10);
      
      return view('pages.user.exam.result',compact('results'));
    }

    public function ResultDetails($id)
    {
        $userId=Auth::user()->id;
        $exams=Exams::where('user_id', $userId)->where('quizes_id',$id)->get();
        $quiz=Quizes::find($id);
        $questions=Question::where('quizes_id',$id)->get();

        return view('pages.user.exam.resultDetails',compact('exams','quiz','questions'));
    }
}

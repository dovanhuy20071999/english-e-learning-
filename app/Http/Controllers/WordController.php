<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_word;
use Auth;

class WordController extends Controller
{
    public function wordLearned(Request $request)
    {   
        $data = new User_word;
        $data->user_id = Auth::user()->id;
        $data->word_id = $request->id;
        $data->status = 1;
        $data->save();

        return redirect()->back();
    }
}

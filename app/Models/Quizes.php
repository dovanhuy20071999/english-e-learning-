<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizes extends Model
{
    use HasFactory;

    protected $fillable=['quiz_name','lesson_id','description','quiz_time','quiz_date','status','number_of_question'];
}

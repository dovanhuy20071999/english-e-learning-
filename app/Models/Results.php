<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;

    protected $table = 'results';

    protected $fillable=['user_id','quizes_id','total_mark','yes_ans','no_ans','date','status','result_json'];
    
    public function user()
    {
        return $this->belongsTo(User::class);   
    }
    public function quizes()
    {
        return $this->belongsTo(Quizes::class);
    }
}

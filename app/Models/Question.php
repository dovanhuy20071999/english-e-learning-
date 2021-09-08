<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable=['quizes_id','question','answer','status','options','note'];
    
    public function optionsdata()
    {
        return $this->hasMany(Options::class,'questions_id')->inRandomOrder();
    }

    public function quizes()
    {
        return $this->belongsTo(Quizes::class);
    }

}

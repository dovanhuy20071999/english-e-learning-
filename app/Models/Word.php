<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $table='words';

    protected $fillable = [
        'word',
        'mean',
        'lesson_id'
    ];

    public function lessons()
    {
        return $this->belongsTo(Lesson::class,'lesson_id');
    }
}

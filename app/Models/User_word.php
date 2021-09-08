<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_word extends Model
{
    use HasFactory;

    protected $table ='user_word';

     protected $fillable = [
        'user_id',
        'word_id',
        'status'
    ];
}

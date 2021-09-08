<?php

namespace App\Repository\Quiz;

use App\Models\Quiz;
use App\Repository\BaseRepository;
use Carbon\Carbon;

class QuizRepository extends BaseRepository implements QuizRepositoryInterface
{
    public function __construct(Quiz $quiz)
    {
        parent::__construct($quiz);
    }

}

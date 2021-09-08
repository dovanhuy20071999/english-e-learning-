<?php

namespace App\Repository\Question;

use App\Models\Question;
use App\Repository\BaseRepository;
use Carbon\Carbon;

class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{
    public function __construct(Question $question)
    {
        parent::__construct($question);
    }

}

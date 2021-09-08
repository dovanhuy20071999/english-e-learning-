<?php

namespace App\Repository\Exam;

use App\Models\Exam;
use App\Repository\BaseRepository;
use Carbon\Carbon;

class ExamRepository extends BaseRepository implements ExamRepositoryInterface
{
    public function __construct(Exam $exam)
    {
        parent::__construct($exam);
    }

}

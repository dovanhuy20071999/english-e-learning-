<?php

namespace Tests\Unit\Models;

use App\Models\Exams;
use Tests\ModelsTestCase;
use Illuminate\Support\Facades\Schema;

class ExamTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testImageConfiguration()
    {
        $this->runConfigurationAssertions(new Exams(), [
            'user_id',
            'question_id',
            'quizes_id',
            'ans',
            'is_ans',
            'status',
        ]);
    }
}

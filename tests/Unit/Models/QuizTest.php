<?php

namespace Tests\Unit\Models;

use App\Models\Quizes;
use Tests\ModelsTestCase;
use Illuminate\Support\Facades\Schema;

class QuizTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testImageConfiguration()
    {
        $this->runConfigurationAssertions(new Quizes(), [
            'quiz_name',
            'lesson_id',
            'description',
            'quiz_date',
            'quiz_time',
            'number_of_question',
            'status',
        ]);
    }
}
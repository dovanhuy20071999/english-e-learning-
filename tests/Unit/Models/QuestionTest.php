<?php

namespace Tests\Unit\Models;

use App\Models\Question;
use App\Models\Options;
use App\Models\Quizes;
use Tests\ModelsTestCase;

class QuestionTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCourseConfiguration()
    {
        $this->runConfigurationAssertions(new Course(), [
            'quizes_id',
            'question',
            'answer',
            'status',
            'options',
        ]);
    }

    public function testQuestionHasManyOptionsdataRelationship()
    {
        $model = new Question();

        $relation = $model->optionsdata();

        $this->assertHasManyRelation($relation, $model, new Options()); 
    }

    public function testQuestionBelongtoQuizesRelationship()
    {
        $model = new Question();

        $relation = $model->quizes();

        $this->assertBelongtoRelation($relation, $model, new Quizes());
    }
}
<?php

namespace Tests\Unit\Models;

use App\Models\Word;
use App\Models\Lesson;
use Tests\ModelsTestCase;

class WordTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCourseConfiguration()
    {
        $this->runConfigurationAssertions(new Word(), [
            'word',
            'mean',
            'lesson_id',
        ]);
    }

    public function testWordBelongtoLessonRelationship()
    {
        $model = new Word();

        $relation = $model->lessons();

        $this->assertBelongtoRelation($relation, $model, new Lesson());
    }
}
<?php

namespace Tests\Unit\Models;

use App\Models\Results;
use App\Models\User;
use App\Models\Quizes;
use Tests\ModelsTestCase;

class ResultTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testResultConfiguration()
    {
        $this->runConfigurationAssertions(new Results(), [
            'user_id',
            'quizes_id',
            'total_mark',
            'yes_ans',
            'no_ans',
            'status',
            'date',
        ]);
    }

    public function testResultBelongtoUserRelationship()
    {
        $model = new Results();
        
        $relation = $model->courses();

        $this->assertBelongsToRelation($relation, $model, new User());
    }

    public function testResultBelongtoQuizesRelationship()
    {
        $model = new Results();
        
        $relation = $model->courses();

        $this->assertBelongsToRelation($relation, $model, new Quizes());
    }
}
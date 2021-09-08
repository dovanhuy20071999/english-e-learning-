<?php

namespace Tests\Unit\Models;

use App\Models\Options;
use App\Models\Quizes;
use Tests\ModelsTestCase;

class OptionTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testOptionConfiguration()
    {
        $this->runConfigurationAssertions(new Options(), [
            'question_id',
            'option',
            'status',
        ]);
    }

    public function testOptionBelongtoQuizeRelationship()
    {
    	$model = new Options();

    	$relation = $model->quizes();

    	$this->assertBelongsToRelation($relation, $model, new Quizes());
    }
   	
}

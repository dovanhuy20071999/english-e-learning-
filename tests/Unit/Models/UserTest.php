<?php

namespace Tests\Unit\Models;

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\ModelsTestCase;

class UserTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserConfiguration()
    {
        $this->runConfigurationAssertions(new User(), [
            'name',
            'email',
            'password',
            'role',
            'provider_id',
        ]);
    }

    public function testUserMorphOneImageRelationship()
    {
        $model = new User();

        $relation = $model->image();

        $this->assertMorphOneRelation('imgable_type', 'imgable_id', $relation);
    }

    public function testCourseBelongtoManyCourseRelationship()
    {
        $model = new User();
        
        $relation = $model->courses();

        $this->assertBelongsToManyRelation($relation, $model, new Course());
    }

    public function testUserBelongtoManyLessonRelationship()
    {
        $model = new User();

        $relation = $model->lessons();

        $this->assertBelongsToManyRelation($relation, $model, new Lesson());
    }
}

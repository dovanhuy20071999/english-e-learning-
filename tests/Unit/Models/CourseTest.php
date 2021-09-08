<?php

namespace Tests\Unit\Models;

use App\Models\Course;
use App\Models\User;
use App\Models\Lesson;
use Tests\ModelsTestCase;

class CourseTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCourseConfiguration()
    {
        $this->runConfigurationAssertions(new Course(), [
            'name',
            'description',
        ]);
    }

    public function testCourseMorphOneImageRelationship()
    {
        $model = new Course();

        $relation = $model->image();

        $this->assertMorphOneRelation('imgable_type', 'imgable_id', $relation);
    }

    public function testCourseHasManyLessonRelationship()
    {
    	$model = new Course();

    	$relation = $model->lessons();

    	$this->assertHasManyRelation($relation, $model, new Lesson());
    }

    public function testCourseBelongtoManyUserRelationship()
    {
    	$model = new Course();

    	$relation = $model->users();

    	$this->assertBelongsToManyRelation(
            $model,
            'user_course.course_id',
            'user_course.user_id',
            $relation
        );
    }
   	
}

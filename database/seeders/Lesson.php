<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Lesson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert(array(
            array(
                'name' => 'Lesson about family members 1',
                'course_id' => '1',
            ),
            array(
                'name' => 'Lesson about family members 2',
                'course_id' => '1',
            ),
            array(
                'name' => 'Lesson about family members 3',
                'course_id' => '1',
            ),
            array(
                'name' => 'Lesson about family members 4',
                'course_id' => '1',
            ),
            array(
                'name' => 'Lesson about family members 5',
                'course_id' => '1',
            ),
        ));
    }
}

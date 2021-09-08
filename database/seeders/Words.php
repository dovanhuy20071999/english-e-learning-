<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Words extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert(array(
            array(
                'word' => 'Father',
                'mean' => 'Ba,bố',
                'lesson_id' => '1',
            ),
            array(
                'word' => 'Mother',
                'mean' => 'Mẹ',
                'lesson_id' => '1',
            ),
            array(
                'word' => 'Son',
                'mean' => 'Con trai',
                'lesson_id' => '1',
            ),
            array(
                'word' => 'Uncel',
                'mean' => 'Chú',
                'lesson_id' => '1',
            ),
            array(
                'word' => 'Grandfather',
                'mean' => 'Ông nội',
                'lesson_id' => '1',
            ),
        ));
    }
}

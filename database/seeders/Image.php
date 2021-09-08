<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Image extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(array(
            array(
                'url' => 'assets/image/family.jpg',
                'imgable_id' => '1',
                'imgable_type' => 'App\Models\Course',
            ),
            array(
                'url' => 'assets/image/animal.jpg',
                'imgable_id' => '3',
                'imgable_type' => 'App\Models\Course',
            ),
            array(
                'url' => 'assets/image/fruit.jpg',
                'imgable_id' => '2',
                'imgable_type' => 'App\Models\Course',
            ),
            array(
                'url' => 'assets/image/job.jpg',
                'imgable_id' => '4',
                'imgable_type' => 'App\Models\Course',
            ),
            array(
                'url' => 'assets/image/family.jpg',
                'imgable_id' => '1',
                'imgable_type' => 'App\Models\Course',
            ),
            array(
                'url' => 'assets/image/family.jpg',
                'imgable_id' => '1',
                'imgable_type' => 'App\Models\Course',
            ),
        ));
    }
}

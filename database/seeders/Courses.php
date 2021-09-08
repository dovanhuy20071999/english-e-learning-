<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(array(
            array(
                'name' => 'Family member',
                'description' => 'Các từ vựng về chủ đề các thành viên trong gia đình',
            ),
            array(
                'name' => 'Fruit',
                'description' => 'Các từ vựng về chủ đề các loại trái cây',
            ),
            array(
                'name' => 'Animal',
                'description' => 'Các từ vựng về chủ đề các loài động vật',
            ),
            array(
                'name' => 'Job',
                'description' => 'Các từ vựng về chủ đề các nghề nghiệp',
            ),
            array(
                'name' => 'Travelling',
                'description' => 'Các từ vựng về chủ đề du lịch',
            ),
            array(
                'name' => 'Traffic',
                'description' => 'Các từ vựng về chủ đề giao thông',
            ),
        ));
    }
}

<?php

namespace Database\Seeders;

use App\Models\UserLesson;
use Illuminate\Database\Seeder;

class UserLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserLesson::factory()->count(100)->create();
    }
}

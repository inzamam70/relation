<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course_student;


class Course_studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $course_student=[
            [
                'course_id'=>1,
                'student_id'=>1,
            ],
            [
                'course_id'=>2,
                'student_id'=>2,
            ],
           
        ];
    }
}

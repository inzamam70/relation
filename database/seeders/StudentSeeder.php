<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $student=[
            [
                'name'=>'inzamam',
            ],
            [
                'name'=>'raj',
            ],
           
        ];
        foreach($student as $key=>$value){
            Student::create($value);
        }
        
    }
}

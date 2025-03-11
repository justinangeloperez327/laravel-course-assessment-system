<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Bachelor of Science in Information Technology',
            'code' => 'BSIT',
            'description' => 'This course is designed to provide students with the knowledge and skills in computer programming, systems analysis and design, computer networks, database design and development, and web technology.',
        ]);

        Course::create([
            'name' => 'Bachelor of Science in Computer Science',
            'code' => 'BSCS',
            'description' => 'This course is designed to provide students with the knowledge and skills in computer programming, systems analysis and design, computer networks, database design and development, and web technology.',
        ]);

        Course::create([
            'name' => 'Bachelor of Science in Information Systems',
            'code' => 'BSIS',
            'description' => 'This course is designed to provide students with the knowledge and skills in computer programming, systems analysis and design, computer networks, database design and development, and web technology.',
        ]);

        Course::create([
            'name' => 'Bachelor of Science in Nursing',
            'code' => 'BSN',
            'description' => 'This course is designed to provide students with the knowledge and skills in computer programming, systems analysis and design, computer networks, database design and development, and web technology.',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
// use App\Models\;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user=User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'admin',
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Qiqi',
            'email' => 'qiqi@example.com',
            'password' => 'deadkid',
            'is_admin' => false,
        ]);

        $course = Course::factory()->create([
            'title' => 'Data Science',
            'description' => 'Explore the world of data',
            'price' => 10.0,
            'user_id'=> $user->id,
        ]);
        Course::factory()->create([
            'title' => 'Laravel',
            'description' => 'Explore the world of Laravel',
            'price' => 100.0,
            'user_id'=> $user->id,
        ]);

        $lessons = [
            [
                'course_id' => 1,
                'title' => 'What is Data Science',
                'video_url' => 'https://www.youtube.com/embed/RBSUwFGa6Fk',
            ],
            [
                'course_id' => 1,
                'title' => 'Data Analytics vs Data Science',
                'video_url' => 'https://www.youtube.com/embed/dcXqhMqhZUo',
            ],
            [
                'course_id' => 1,
                'title' => 'What are AI Agents?',
                'video_url' => 'https://www.youtube.com/embed/F8NKVhkZZWI',
            ],
            [
                'course_id' => 1,
                'title' => 'AI, Machine Learning, Deep Learning and Generative AI Explained',
                'video_url' => 'https://www.youtube.com/embed/qYNweeDHiyU',
            ],
            [
                'course_id' => 2,
                'title' => 'What is Laravel',
                'video_url' => 'https://www.youtube.com/embed/1onmPIe07yo',
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::factory()->create([
                'title' => $lesson['title'],
                'video_url'=> $lesson['video_url'],
                'course_id' => $lesson['course_id'],
            ]);
        }


    }
}

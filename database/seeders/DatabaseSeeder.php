<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Natalie Storm',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Nicolas Romero',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Courses'
        ]);

        \App\Models\SubCategory::factory()->create([
            'name' => 'Design',
            'category_id' => 1
        ]);

        \App\Models\Instructor::factory()->create([
            'position' => 'Design Departament',
            'description' => 'Natalie is freelance Designer',
            'user_id' => 1
        ]);

        \App\Models\Course::factory()->create([
            'name'=> 'MasterClass Designing for Web',
            'sub_category_id' => 1,
            'instructor_id' => 1
        ]);

        \App\Models\Chapter::factory()->create([
            'name'=> 'What is interaction Design',
            'video_url' => 'youtube.com',
            'order' => 1,
            'course_id' => 1,
        ]);

        \App\Models\Chapter::factory()->create([
            'name'=> 'Motion in UI Design',
            'video_url' => 'youtube.com',
            'order' => 2,
            'course_id' => 1,
        ]);

        \App\Models\Note::factory()->create([
            'notes'=> 'Motion in UI Design',
            'chapter_id' => 1,
        ]);

        \App\Models\Student::factory()->create([
            'user_id'=> 2,
            'level' => 'Basic',
        ]);

        \App\Models\Comment::factory()->create([
            'comment'=> 'Cool staff tutor',
            'chapter_id' => 1,
            'user_id' => 2
        ]);

        \App\Models\Answer::factory()->create([
            'comment'=> 'Cool staff tutor',
            'comment_id' => 1,
            'user_id' => 2
        ]);

        DB::table('student_course')->insert([
            'student_id' => 1,
            'course_id' => 1,
            'viewed_percentage' => 30
        ]);

        DB::table('student_chapter')->insert([
            'student_id' => 1,
            'chapter_id' => 1,
            'viewed_percentage' => 100
        ]);

        DB::table('student_chapter')->insert([
            'student_id' => 1,
            'chapter_id' => 2,
            'viewed_percentage' => 30
        ]);

    }
}

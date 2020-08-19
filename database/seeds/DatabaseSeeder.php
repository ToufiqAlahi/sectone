<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CoursesTableSeeder::class);
        // $this->call(SemestersTableSeeder::class);
        // $this->call(HostelMemberTableSeeder::class);
        // $this->call(CourseSemesterTableSeeder::class);
        // $this->call(EventsTableSeeder::class);
        // $this->call(BooksTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        // $this->call(StudentsTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Academic\Department;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
        $cse = Department::create([
            'id'=>'101',
            'name' => 'Computer Science & Engineering',
            'short_form' => 'CSE',
        ]);
        $eee = Department::create([
            'id'=>'102',
            'name' => 'Electrical & Electronics Engineering',
            'short_form' => 'EEE',
        ]);
        $cse = Department::create([
            'id'=>'103',
            'name' => 'Civil Engineering',
            'short_form' => 'CE',
        ]);
    }
}

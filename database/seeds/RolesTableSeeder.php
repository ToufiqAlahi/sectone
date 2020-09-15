<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $roles = [
            ['id' => 1, 'name'=> 'super_admin'],
            ['id' => 2, 'name'=> 'admin'],
            ['id' => 3, 'name'=> 'teacher'],
            ['id' => 4, 'name'=> 'student'],
            ['id' => 5, 'name'=> 'stuff'],
            ['id' => 6, 'name'=> 'guest']
        ];

        foreach ($roles as $role) {
            Role::create([
                'id'=>$role['id'],
                'name'=>$role['name']
            ]);
        }

    }
}

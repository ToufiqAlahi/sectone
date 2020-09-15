<?php

use Illuminate\Database\Seeder;
use App\Models\Hostel\Hostel;
class HostelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hostel::truncate();

        Hostel::create([
            'id'=>'02',
            'name'=> 'Muktijuddha Hall',
            'proctor'=> 'Shamsul Alom',
            'total_sits'=> '250'
        ]);
    }
}

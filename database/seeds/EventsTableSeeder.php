<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::truncate();
        $images = glob(public_path('image/event/*'));
        foreach($images as $image){
            if (is_file($image)) {
                unlink($image);
            }
        }
        factory(Event::class, 4)->create();
    }
}

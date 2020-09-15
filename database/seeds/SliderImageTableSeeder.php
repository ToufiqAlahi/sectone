<?php

use Illuminate\Database\Seeder;
use App\Models\Library\Book;
class SliderImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('slider_images')->truncate();
        factory(Book::class, 20)->create();
        $imgs = ['01.jpg','02.jpg','03.jpg','04.jpg','05.jpg','06.jpg','07.jpg'];
        $i=0;

        foreach ($imgs as $img) {
            \DB::table('slider_images')->insert([
                'img'=> $imgs[$i]
            ]);
            $i++;
        }
    }
}
<?php

use Illuminate\Database\Seeder;
use App\Models\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        $books  = [
            [
                'title'=>'Programming with C',
                'category_id'=>1,
                'author' => 'Hervert Shield',
                'description'=> 'Some Dummy text',
                'total' => '100',
                'available' => '74',
            ],
            [
                'title'=>'Computer Programming',
                'category_id'=>1,
                'author' => 'Jain Malik Shield',
                'description'=> 'Some Dummy text',
                'total' => '50',
                'available' => '14',
            ],
            [
                'title'=>'Networking System',
                'category_id'=>1,
                'author' => 'Abdul Kadir',
                'description'=> 'Some Dummy text',
                'total' => '20',
                'available' => '18',
            ],
            [
                'title'=>'Electrical and Electrical Engineering',
                'category_id'=>1,
                'author' => 'Toma Banik',
                'description'=> 'Some Dummy text',
                'total' => '50',
                'available' => '14',
            ],
            [
                'title'=>'compiler Design',
                'category_id'=>1,
                'author' => 'Tawfik Alahi',
                'description'=> 'Some Dummy text',
                'total' => '20',
                'available' => '10',
            ],
        ];

        foreach ($books as $book) {
            Book::create([
                'title' => $book['title'],
                'Category_id'=> $book['category_id'],
                'author'=> $book['author'],
                'description'=> $book['description'],
                'total'=> $book['total'],
                'available'=> $book['available']
            ]);
        }
    }
}

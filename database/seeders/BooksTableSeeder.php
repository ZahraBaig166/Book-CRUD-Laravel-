<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // Use your Books model

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name' => 'The Great Gatsby',
                'short_description' => 'A novel about the American dream.',
                'price' => 10.99,
                'isbn' => '9780743273565',
                'no_of_pages' => 180,
                'publication_date' => '1925-04-10',
            ],
            [
                'name' => 'To Kill a Mockingbird',
                'short_description' => 'A novel about racial injustice in the Deep South.',
                'price' => 7.99,
                'isbn' => '9780061120084',
                'no_of_pages' => 281,
                'publication_date' => '1960-07-11',
            ],
            [
                'name' => '1984',
                'short_description' => 'A dystopian novel set in a totalitarian society.',
                'price' => 8.99,
                'isbn' => '9780451524935',
                'no_of_pages' => 328,
                'publication_date' => '1949-06-08',
            ],
            [
                'name' => 'Pride and Prejudice',
                'short_description' => 'A romantic novel that critiques the British landed gentry.',
                'price' => 6.99,
                'isbn' => '9780141040349',
                'no_of_pages' => 432,
                'publication_date' => '1813-01-28',
            ],
            [
                'name' => 'Moby Dick',
                'short_description' => 'A novel about the obsessive quest of Ahab for revenge on Moby Dick.',
                'price' => 12.50,
                'isbn' => '9781503280786',
                'no_of_pages' => 585,
                'publication_date' => '1851-10-18',
            ],
            [
                'name' => 'Brave New World',
                'short_description' => 'A dystopian novel that explores a technologically advanced future.',
                'price' => 9.99,
                'isbn' => '9780060850524',
                'no_of_pages' => 288,
                'publication_date' => '1932-08-30',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book); // Use the Books model to create entries
        }
    }
}

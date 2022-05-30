<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')-> insert(
            [
                'id' => '6',
                'title' => '50',
                'year' => '2123',
                'price' => '456',
                'pages' => '56',
                'publication_place' => 'fdfddfd',
                'dataDodania' => '2022-06-25'


            ]
            );
    }
}

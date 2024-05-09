<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        Book::insert([


                [
                    'title' => 'Example Book 2',
                    'year' => 2018,
                ],
                [
                    'title' => 'Example Book 2',
                    'year' => 2018,
                ],
                [
                    'title' => 'Example Book 2',
                    'year' => 2018,
                ],
                [
                    'title' => 'Example Book 2',
                    'year' => 2018,
                ],
                [
                    'title' => 'Example Book 2',
                    'year' => 2018,
                ],
                [
                    'title' => 'Example Book 2',
                    'year' => 2018,
                ],
                [
                    'title' => 'Example Book 2',
                    'year' => 2018,

                ],
                [
                    'title' => 'Example Book 2',
                    'year' => 2018,

                ]]

        );


    }
}

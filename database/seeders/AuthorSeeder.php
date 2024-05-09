<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;



class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        Author::insert([


                [
                    'name' => 'Author Book 2',
                    'age' => 2018,
                ],
                [
                    'name' => 'Author Book 2',
                    'age' => 20,
                ],
                [
                    'name' => 'Author Book 2',
                    'age' => 20,
                ],
                [
                    'name' => 'Author Book 2',
                    'age' => 20,
                ],
                [
                    'name' => 'Author Book 2',
                    'age' => 20,
                ],
                [
                    'name' => 'Author Book 2',
                    'age' => 20,
                ],
                [
                    'name' => 'Author Book 2',
                    'age' => 20,

                ],
                [
                    'name' => 'Author Book 2',
                    'age' => 20,

                ]]

        );


    }
}

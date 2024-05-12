<?php

namespace App\GraphQl\Query;

use App\Models\Book;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class BookQuery extends Query
{
    protected $attributes = [
        'name' => 'Book'
    ];

    public function type(): Type
    {
        // return Type::listOf(GraphQL::type('BookType'));
        return GraphQL::type('BookType');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The title of the Book'
            ],
            'year' => [
                'type' => Type::int(),
                'description' => 'The year of the Book'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The created time of the Book'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The updated time of the Book'
            ],
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['id']) && $args['id'] != 0) {
            return Book::query()->find($args['id']);
        }

      
         else {
            return Book::all();
        }

        // if (isset($args['name'])) {
        //     return Student::where('name', $args['name'])->get();
        // }

        // if (isset($args['email'])) {
        //     return Student::where('email', $args['email'])->get();
        // }

        // if (isset($args['age'])) {
        //     return Student::where('age', $args['age'])->get();
        // }

        // if (isset($args['country'])) {
        //     return Student::where('country', $args['country'])->get();
        // }

    }

    public function books()
    {
        return Book::all();
    }
}

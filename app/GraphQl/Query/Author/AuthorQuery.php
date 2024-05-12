<?php

// namespace App\GraphQl\Query;
namespace App\GraphQl\Query\Author;

use App\Models\Author;
use App\Models\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class AuthorQuery extends Query
{
    protected $attributes = [
        'name' => 'Author'
    ];

    public function type(): Type
    {
        return GraphQL::type('AuthorType');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of the Book'
            ],
            'age' => [
                'type' => Type::int(),
                'description' => 'The age of the Book'
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
        if (isset($args['id'])) {
            return Author::query()->find($args['id']);
        }
    }


}

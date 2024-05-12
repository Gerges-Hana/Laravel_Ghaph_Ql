<?php

namespace App\GraphQl\Types;

use App\Models\Author;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class  AuthorType extends GraphQLType
{

    protected $attributes = [
        'name' => 'AuthorType',
        'description' => 'book',
        'model' => Author::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'The id of the Author'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of the Author'
            ],
            'age' => [
                'type' => Type::string(),
                'description' => 'The age of the Author'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the student was created',
                //                'resolve' => function ($model) {
                //                    return $model->created_at ?: '';
                //                }
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the student was last updated',
                //                'resolve' => function ($model) {
                //                    return $model->updated_at ?: '';
                //                }
            ],
            'books' => [
                'type' => Type::listOf(GraphQL::type("BookType")),
                'description' => 'The age of the Author'
            ],
        ];
    }
}

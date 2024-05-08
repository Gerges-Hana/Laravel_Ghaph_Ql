<?php
namespace App\GraphQl\Types;

use App\Models\Booke;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class  BookType extends GraphQLType{

    protected $attributes = [
        'name' => 'Book',
        'description' => 'book',
        'model' => Booke::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the student'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of the student'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'The email of the student'
            ],
            'age' => [
                'type' => Type::int(),
                'description' => 'The age of the student'
            ],
            'country' => [
                'type' => Type::string(),
                'description' => 'The country of the student'
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The date the student was created',
                'resolve' => function($model) {
                    return $model->created_at;
                }
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The date the student was last updated',
                'resolve' => function($model) {
                    return $model->updated_at;
                }
            ]
        ];
    }
}

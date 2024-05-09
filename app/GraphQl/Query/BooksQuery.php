<?php

namespace App\GraphQl\Query;

use App\Models\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class BooksQuery extends Query
{
    protected $attributes = [
        'name' => 'books'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('BookType'));
      
    }


    public function resolve($root, $args)
    {
            return Book::all();
    }

}

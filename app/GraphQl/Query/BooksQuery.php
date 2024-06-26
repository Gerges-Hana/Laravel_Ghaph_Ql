<?php

namespace App\GraphQl\Query;

use App\Models\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use Closure;


class BooksQuery extends Query
{
    protected $attributes = [
        'name' => 'books'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('BookType'));
      
    }


    public function resolve($root, $args ,$context,ResolveInfo $info , Closure $getSelectFields )
    {
        $fields =$getSelectFields();
        $select=$fields->getSelect();
        $with=$fields->getRelations();
        return Book::select($select)->with($with)->get();
    }

}

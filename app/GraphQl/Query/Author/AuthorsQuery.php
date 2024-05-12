<?php

namespace App\GraphQl\Query\Author;

use App\Models\Author;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use Closure;

class AuthorsQuery extends Query
{
    protected $attributes = [
        'name' => 'Authors'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('AuthorType'));
      
    }


    // public function resolve($root, $args)
    // {
    //         return Author::all();
    // }
    public function resolve($root, $args ,$context,ResolveInfo $info , Closure $getSelectFields )
    {
        $fields =$getSelectFields();
        $select=$fields->getSelect();
        $with=$fields->getRelations();
        return Author::select($select)->with($with)->get();
    }

}

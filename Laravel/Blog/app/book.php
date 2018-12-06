<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'books' ;
    protected $guarded = [];

    public function addBook($title , $description , $author , $category , $status){
        DB::table('books')->insert(
            [
                'title' => $title,
                'description' => $description,
                'author' => $author,
                'category' => $category,
                'status' => $status
            ]
        );
    }

    public $timestamps = true;
}

<?php

namespace App\Http\Controllers;

use App\book;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function add(Request $request){
//
        if ($request->has('title') && $request->has('author')){
            if($request->has('description')) $description = $request->input('description');
            else { $description = "...";}
            if($request->has('category')) $category = $request->input('category');
            else { $description = "...";}

            // bien chua du lieu tu input
            $title = $request->input('title');
            $author = $request->input('author');
            $status = $request->input('status');

            $bookModal = new book();
            $bookModal->addBook($title , $description , $author , $category , $status);
            return view('addbooks');

        }
        return view('addbooks');
    }
    public function getSection(){
        return view('addsection');
    }
    public function getChapter(){
        return view('addchapter');
    }
}

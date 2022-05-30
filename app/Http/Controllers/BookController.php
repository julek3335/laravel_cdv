<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show(){
    // DB::table('books')->insert([
    //     'id' => 2 ,'title' => 'malyK', 
    //     'year' => '2014', 
    //     'price' => '2115', 
    //     'pages' => '456',
    //     'Publication_place' => 'nw', 
    //     'Data dodania' => '2022-05-23'
    // ]);

        $test = new Book();
        $test->title = "malyK";
        $test->year = '2014';
        $test->price = '2115';
        $test->pages = '32';
        $test->publication_place = 'nw';
        $test->dataDodania='2022-02-02';
        $test->save();

        $data = Book::select(['*'])->get();
        return $data;
    // return view('books',['data'=>$data]);

    }
}

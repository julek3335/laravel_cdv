<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController2 extends Controller
{
    public function index(){
        $select = DB::select('select * from users');
        return view('homeAdmin')->with('name',$select);
    }
}

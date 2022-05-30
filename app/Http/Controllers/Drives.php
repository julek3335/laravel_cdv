<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Drives extends Controller
{
    public function index($drive){
        if ($drive == 'fdd') {
            return "dyskietka";
        }
        else if ($drive == 'hdd') {
            return "twardy";
        }
        else if ($drive == 'ssd') {
            return "ssd";
        }

    }
}

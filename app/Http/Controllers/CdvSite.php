<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdvSite extends Controller
{
    public function index($site){
        // return ['site' => 'cdv.pl', 'city' => 'Poznan'];
        return ['site' => '$site', 'city' => 'Poznan'];

    }
}

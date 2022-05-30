<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    public function account(Request $req){

        // $this->validate($req, ['adress'=> 'requred'], )


        $req->validate([
            'adress' => 'required|min:5',
            'email' => 'required',
        ],
        [
           'adress.required' => 'pole adres jest wymagame' ,
           'adress.min' => 'pole adres musi miec min 2 znaki',
           'email.required' => 'pole email jest wymagane',
           'email.email' => 'pole email musi byc adresem poczty ele'
        ]);

        return $req;
    }
}

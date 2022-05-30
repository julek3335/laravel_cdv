<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function account(Request $req){
        // return $req['name'];
        //   return $req;
        $returnTable  = array(
            'name' => $req['name'],
            'email' => $req['email'],
            'password' => $req['password'],
            'gender' => $req['gender'], 
            'city' => $req['cities']
        );
        if ($req['rules'] != null) {
            $returnTable['rules'] = 'yes';
        }else{$returnTable['rules'] = 'no';}
        // return view('form',['name' => $req['name'], 'email' => $req['email'], 'password' => $req['password'], 'gender' => $req['gender'], 'city' => $req['cities']]);
        return view('form',$returnTable);
    }
}

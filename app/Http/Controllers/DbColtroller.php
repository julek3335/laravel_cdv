<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbColtroller extends Controller
{
    public function show()
    {
        // return DB::select('select * from users');
        // return DB::table('user')
        // -> where('surname','Nowak')
        // ->get();

        // print_r(DB::table('user')->first());

        // return DB::table('user')
        //     -> where('surname','Nowak')
        //     -> delete();
        
            // return DB::table('user')
            // -> where({
            //     'id', '10',
            //     'surname','Nowak',
            //     ''

            // })

            // -> delete();

            // DB::table('user')->insert(['id' => 2 ,'name' => 'Wojtek', 'surname' => 'dsss', 'birthday' => '2022-05-04', 'create_user' => '2022-05-16 17:42:54.000000','height' => '100', 'weight' => '65', 'city_id' => '1']);

            // return DB::table('user')
            // -> where('surname','v')
            // ->update(
            //     [
            //         'name' => 'Zbyszek',
            //         'weight' => '90',
            //             'city_id' => '2',
            //         'height' => "230"
            //     ]
            //     );
            // return DB::table('user')-> max('weight');
            // return DB::table('user')-> sum('weight');
            // return DB::table('user')-> count('weight');
            // return number_format( DB::table('user')-> avg('weight'),2,'.');

            $user =  DB::table('user')
            -> select('user.name', 'user.surname', 'city.city', 'state.nazwa')
            -> join('city','city_id', 'city.id')
            -> join('state', 'state_id', 'state.id')
            ->get();

            $userOverHeight = DB::table('user')
            ->where('height', '>', 200)
            ->get();


            return view('db.test',['users' => $user, 'userOver200' => $userOverHeight]);
            
    }
}

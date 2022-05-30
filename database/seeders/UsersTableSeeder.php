<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')-> insert(
            [
                'id' => '6',
                'city_id' => '50',
                'name' => 'Katarzyna',
                'surname' => 'Woxniak',
                'birthday' => '2000-2-2',
                'weight' => '54',
                'height' => '160',
                'create_user' => '2022-05-16 17:42:54'


            ]
            );
    }
}

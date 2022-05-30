<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data = Test::select(['*'])
        // // ->where('surname', 'Anna')
        // ->get();
        // return view('test1',['data'=>$data]);


        // $name = Auth::user()->name;
        // return Test::select(['name','surname'])->get();

        // $name = Auth::user()->name;
        // $data = [$surname='Pawlak'];
        // $test = new Test();
        // $test->name = $name;
        // $test->surname = 'Nowak';
        // $test->save();

        return view('adminLte.dashBoadr');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');

    }



}

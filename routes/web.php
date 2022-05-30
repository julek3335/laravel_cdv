<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
// use App\Http\Controllers\CdvSite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    // return view('test');
    // return ['name'=>'JAnusz', 'surname'=>'Kowalski'];
    return view('test',['name'=>'Janusz', 'surname'=>'Kowalski']);
});

Route::get('/pages/{x}',function($x){
    $pages=[
        'about' => 'informacja o stanie',
        'home' => 'strona domowa',
        'contact' => 'kontakt'
    ];
    return $pages[$x];
});

Route::get('/adres/{city}/{street?}/{zipCode?}', function (string $city, string $street = null, int $zipCode = null) {
    $zipCode=substr($zipCode, 0, 2). "-" .substr($zipCode, 2, 3);
    echo <<< ADRESS
    "miasto $city<br>"
    "Ulica $street<br>"
    "kod $zipCode<br>"
    ADRESS;
})->name('adress');
Route::redirect('/adress/{city}/{street?}/{zipCode?}','/adres/{city}/{street?}/{zipCode?}');

// Route::get('/adress/{city}/{street?}/{zipCode?}', function (string $city, string $street = null, int $zipCode = null) {
//     return redirect('/adres/'.$city.'/'.$street.'/'.$zipCode);
// });


Route::prefix('admin')->group(function(){

    Route::get('/home/{name}', function ($name) {
        echo "witaj na strinie $name";
    });

    Route::get('/users', function () {
        echo "users<br>";
    });

    Route::redirect('/{name}', '/admin/home/{name}');

    Route::get('/user/{name}/{age?}', function(string $name, int $age = null){
        echo "Imie $name";

        if($age != null){
            echo $age;
        }

    })->where([
        "name" => '[\w]+',
        "age" => "[0-9]+"
    ]);

});

Route::get('/car/{brand?}/{model?}/{color?}/{price?}',function(string $brand = "bd", string $model = "bd", string $color = "bd", int $price = null){
    echo "Marka: $brand, Model $model <br> Kolor: $color <br> Cena: $price";
})->where([
    "brand" => '[[:alpha:]]+',
    "model" => '[\w]+',
    "color" => '[[:alpha:]]+',
    "price" => '[0-9]+'
]);

Route::redirect('/auto/{brand?}/{model?}/{color?}/{price?}', '/car/{brand?}/{model?}/{color?}/{price?}');


Route::get('blade',function(){
    return view('szablon');
});

// Route::get('site', 'CdvSite@index'); //Laravell >= 7.0

Route::get('site/{cdvsite}', [App\Http\Controllers\CdvSite::class, 'index']);
Route::get('dysk/{model}', [App\Http\Controllers\Drives::class, 'index']);
Route::get('userform',function(){
return view('userform');
});

Route::post('UserController',[App\Http\Controllers\UserController::class, "account"]);

Route::view('user','user');
Route::post('UserController1',[App\Http\Controllers\UserController1::class, "account"]);
Route::post('Form',[App\Http\Controllers\Form::class, "account"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::get('db',[App\Http\Controllers\DbColtroller::class,'show']);

Route::get('books',[App\Http\Controllers\BookController::class,'show']);


Route::get('prophile',function(){
    return view('prophile');
    });


    Route::get('pl',function(){
        App::environment(['locale', 'pl']);
        return view('prophile');
        });

        Route::get('en',function(){
            env('locale', 'en');
            return view('prophile');
            });

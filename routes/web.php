<?php

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

use Illuminate\Support\Facades\DB;
use App\Petition;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
   return 'halo dunia';
});

Route::get('/hello/taufiq', function (){
    return 'halo taufiq1';
});

Route::get('/hello/{nama}', function ($nama){
    return 'halo '. $nama;
});


Route::get('/hello/{nama}/{nim}', function ($nama, $nimterserah){
    return 'halo '. $nama . ' ' . $nimterserah;
});

Route::get('/home', function () {
    $title = 'This is Sparta!!!';
    return view('home');
});

Route::get('/home2', function () {
    $title = 'This is Sparta!!!';
    $body = ['Edwina', 'Annisa', 'Faisal', 'Septian', 'isa'];
    return view('home2', compact('title', 'body'));
    //return view(view: 'home2', compact('title', 'body')); //cara salah. di versi ini tidak perlu tulis view:
});

///
///
///

/*
Route::get('petitions', function (){
    //app langsung request ke database
    //$petitions = DB::table('petitions')->get(); //pakai query builder

    // pakai model, app binta ke db melalui model(tempat fungsi2)
    $petitions = Petition::all();

    return $petitions;
});
*/
//karena pakai controller maka yg di atas diganti seperti ini:
Route::get('petitions', 'PetitionController@index');

/*
Route::get('petitions/{id}', function ($id){
    //$petitions = Petition::find($id);
    //atau untuk dapat arraynya
    //$petitions = Petition::where('id', $id)->get();
    //atau dapat spesific datanya:
    $petitions = Petition::where('id', $id)->first();

    return $petitions;
});
*/




//template
Route::get('test', function () {
    return view('layout/app');
});


// -- Show all petition data
Route::get('petitions', 'PetitionController@index');

// -- Create new Petition data
//dahulukan petitions/create daripada petitions/{id} agar idnya tidak terbaca {id = 'create'}
Route::get('petitions/create', 'PetitionController@create');
Route::post('petitions', 'PetitionController@store');

// -- Update existing petition data
Route::get('petitions/{id}/edit', 'PetitionController@edit');
Route::put('petitions/{id}', 'PetitionController@update');

// -- Delete existing petition data
Route::delete('petitions/{id}', 'PetitionController@destroy');

// -- Menampilkan data spesifik
//cara di atas (di atasnya lg) di ganti cara dibawa yang menggunakan controller agar lebih rapih
Route::get('petitions/{id}', 'PetitionController@show');
Auth::routes();

// -- Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypetitions', function(){
    return Auth::user()->petitions;
})->middleware('auth');

Route::get('petition/{id}/comments', function($id){
    $petition = \App\Petition::find($id);
    $comments = $petition->comments;
    return $comments;
});

Route::post('petition/{id}/comment','PetitionController@storeComment');
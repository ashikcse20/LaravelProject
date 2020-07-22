<?php

// use Facade\FlareClient\View;

//use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\View;

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
    //return View::make('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/ইউজার', function () {
    return view('home');
});

Route::get('/user', 'UserController@index');

/*Route::post('/upload', function (Request $request) {
    //dd($request->file('image'));
    // dd($request->image);
    //dd($request->hasFile('image') );\
    // $request->imagefield->store('images'); 
    // $request->imagefield->store('images', 'public');
    // $request->imagefield->store('images2', 'public');
    $request->imagefield->store('images/images2', 'public');
    return 'uploaded';

});*/

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todos',  'TodoController@index')->name('todo.index');
Route::get('/todos/create', 'TodoController@create');
// Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::post('/todos/create', 'TodoController@store');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

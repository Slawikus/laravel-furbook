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

Route::get('/', function() {
  return redirect('/cat');
});

Route::resource('cat', 'CatController');
Route::get('cat/{cat}/delete', 'CatController@destroy');

Route::get('/cat/breed/{name}', function ($name){
    $breed = Furbook\Breed::with('cats')->whereName($name)->first();
    return view('cats.index')->with('breed', $breed)->with('cats', $breed->cats);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/dashboard', [
    'middleware' => ['auth', 'admin'],
    'uses' => '\Admin\DashboardController@index',
]);
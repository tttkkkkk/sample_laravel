<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});


//こっちは動かない？（laravel8）
// Route::get('/', 'PostController@index');
//こっちなら動く（参考：https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83
Route::get('/', 'App\Http\Controllers\PostController@index');

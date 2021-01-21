<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::prefix('archivos')->group(function(){
    Route::get('create', function () {
       
    });
    Route::get('edit/{archivo}', function ($archivo) {
        return "El archivo es: {$archivo}";
    });
});

Route::redirect("/","/home");

Route::get('/home', function () {
    return view('files.index');
});
Route::delete('/datos', function (Request $request){
    return $request->all();
});

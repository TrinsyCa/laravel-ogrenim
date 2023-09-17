<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\deneme;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\FormFunc;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/deneme',function(){
    return view('deneme');
});*/

Route::get('/user/{isim}',[deneme::class,'test'])->name('user');

Route::get('/web',[Yonet::class,'site'])->name('main');

Route::get('/form',[FormFunc::class,'gorunum']);
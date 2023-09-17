<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class deneme extends Controller
{
    function test($isim)
    {
        return view('deneme',['ad'=>$isim]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Yonet;

class formFunc extends Controller
{
    public function gorunum($data)
    {
        return view('form',$data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Settings extends Controller
{
    public function Settings()
    {
        //Settings
        $data["SiteName"] = "TrinsyCa";
        $data["email"] = "omerislamoglu1905@gmail.com";
        $data["tel"] = "+90 (539) 615 93 53";

        return $data;
    }
}

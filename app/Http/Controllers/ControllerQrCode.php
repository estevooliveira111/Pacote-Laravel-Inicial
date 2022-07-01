<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerQrCode extends Controller
{
    
    public function api($number)
    {
        return json_encode(is_int($number/2));
    }

}

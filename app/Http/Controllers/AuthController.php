<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login()
    {
        return 'This is mi login point.';
    }

    public function register()
    {
        return response()->json('This is register route');
    }
}
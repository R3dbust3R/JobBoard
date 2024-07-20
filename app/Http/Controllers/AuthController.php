<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return 'auth / login';
    }

    public function logout() {
        return 'auto / logout';
    }
}

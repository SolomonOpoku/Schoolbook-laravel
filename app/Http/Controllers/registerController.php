<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function create() {
        return view('pages.register');
    }

    public function login() {
        return view('pages.login');
    }
}

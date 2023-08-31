<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class registerController extends Controller
{

    // Display First Page
    public function home() {
        return view('pages.home');
    }

    // Display Register Page
    public function create() {
        return view('pages.register');
    }

    // Display Login Page
    public function login() {
        return view('pages.login');
    }

    // Display Home Page when Registered or Logged in
    public function index() {
        return view('pages.index');
    }

    // Stores Register Form
    public function store(Request $request) {
        $register = new register;

        $register -> name = $request -> input('name');
        $register -> email = $request -> input('email');
        $register -> school = $request -> input('school');
        $register -> nicky = $request -> input('nicky');
        $register -> password = $request -> input('password');

        $register -> save();
        return redirect('/home');
    }

    public function createPost() {
        return view('pages.post');
    }
}

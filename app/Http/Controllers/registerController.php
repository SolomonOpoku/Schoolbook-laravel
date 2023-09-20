<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

    // Stores Register Form
    public function store(Request $request) {
        $register = request() -> validate([
            'name' => ['string', 'required'],
            'email' => ['string', 'required', 'email', 'unique:register'],
            'school' => ['string', 'required'],
            'nicky' => ['string', 'required'],
            'password' => ['string', 'required', 'min:8', 'max:12'],
        ]);

        register::create($register);
        return redirect('/home');
    }

    // Display Login Page
    public function showLogin() {
        return view('pages.login');
    }

    

    // public function login(Request $request) {
        // $credentials = $request -> only('email', 'password');
        // request() -> validate([
        //     'email' => ['email', 'required'],
        //     'password' => ['required']
        // ]);

        // if (Auth::attempt($credentials)) {
        //     return redirect() -> intended('/home');
        // }
        // return redirect() -> back() -> withErrors(['email' => 'Invalid Credentials!']);

        // if(auth() -> attempt(request() -> only(['email', 'password']), request() -> filled('remember')))
        //  {
        //     return redirect('/home');
        // }
        // return redirect() -> back() -> withErrors(['email' => 'Invalid Credentials!']);
    // }



    // public function login(Request $request) {
    //     $login = request() -> validate([
    //         'email' => ['string', 'required', 'email'],
    //         'password' => ['string', 'required', 'min:8', 'max:12'],
    //     ]);

    //     $user = register::where('email', '=', $request -> email) -> first();
    //     if ($user) {
    //         if ($request -> password == $user -> password) {
    //             $request -> session() -> put('loginId', $user -> id);
    //             return redirect('/home');
    //         } else {
    //             return redirect() -> back() -> withErrors(['fail' => 'Password does not match']);
    //         }
    //     } else {
    //         return redirect() -> back() -> withErrors(['fail' => 'Email is not registered']);
    //     }
    // }
}

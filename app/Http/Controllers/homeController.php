<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // Display Home Page 
    public function index() {
        return view('pages.index');
    }

    // Display Post Page
    public function createPost() {
        return view('pages.post');
    }

    public function profile() {
        return view('pages.profile');
    }

    public function editProfile() {
        return view('pages.edit-profile');
    }

    public function settings() {
        return view('pages.settings');
    }
}

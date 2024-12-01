<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home() {
        return view('home'); // View ya Home
    }

    public function about() {
        return view('about'); // View ya About
    }

    public function services() {
        return view('services'); // View ya Services
    }

    public function projects() {
        return view('projects'); // View ya Projects
    }

    public function blog() {
        return view('blog'); // View ya Blog
    }

    public function contact() {
        return view('contact'); // View ya Contact
    }

}

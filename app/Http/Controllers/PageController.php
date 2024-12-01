<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home'); // View inayoitwa 'home.blade.php'
    }

    public function about()
    {
        return view('about'); // View inayoitwa 'about.blade.php'
    }

    public function services()
    {
        return view('services'); // View inayoitwa 'services.blade.php'
    }

    public function projects()
    {
        return view('projects'); // View inayoitwa 'projects.blade.php'
    }

    public function blog()
    {
        return view('blog'); // View inayoitwa 'blog.blade.php'
    }

    public function contact()
    {
        return view('contact'); // View inayoitwa 'contact.blade.php'
    }
    public function planning()
    {
        return view('planning'); // View inayoitwa 'contact.blade.php'
    }
}

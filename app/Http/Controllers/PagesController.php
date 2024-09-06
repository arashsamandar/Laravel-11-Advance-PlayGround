<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController extends Controller
{
    public function getBookPage(): View{
        return view('books.book');
    }

    public function getHomePage(): View{
        return view('home');
    }
}

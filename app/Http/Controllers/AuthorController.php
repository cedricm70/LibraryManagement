<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::paginate(15);
        return view('author')->with('author', $author);
    }
}

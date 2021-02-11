<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(Author $author)
    {
        return view('author', ['author'=>$author]);
    }
}

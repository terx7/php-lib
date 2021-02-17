<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Request $request)
    {


        $books = Author::leftjoin('book_authors', 'book_authors.author_id', '=', 'authors.id')->leftjoin('books', 'books.id', '=', 'book_authors.book_id')->select('books.*', 'authors.*')->get();
        $books = Book::query()->with('author');
        $author = Author::query()->with('books');

        $order = $request->order ?? 'desc';

        if ($request->has('order')) {
            $order = $request->order;
        }
        if ($request->has('sort')) {
            $books->orderBy($request->sort, $order);
            $order = $request->order === 'desc' ? 'asc' : 'desc';
        }

        return view('welcome', ['books' => $books->paginate(20)->withQueryString(), 'order' => $order, 'author' => $author]);
        //return view('welcome', ['books' => $authors->paginate(20)->withQueryString(), 'order' => $order]);
    }

    public function book(Book $book)
    {
        return view('book', ['books' => $book]);
    }
    public function author(Author $book)
    {
        return view('author', ['books' => $book]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::query()->with('author');

        //$book_authors = DB::table('books')->select('books.id')->join('book_authors', 'book_auhtors.book_id', '=', 'books.id')->join('authors', 'authors.id', '=', 'book_authors.author_id')->get();

        $order = $request->order ?? 'desc';

        if ($request->has('order')) {
            $order = $request->order;
        }
        if ($request->has('sort')) {
            $books->orderBy($request->sort, $order);
            $order = $request->order === 'desc' ? 'asc' : 'desc';
        }

        return view('welcome', ['books' => $books->paginate(20)->withQueryString(), 'order' => $order]);
    }

    public function book(Book $book)
    {
        return view('book', ['books' => $book]);
    }
}

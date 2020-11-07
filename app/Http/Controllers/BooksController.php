<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Book::all();
    }

    public function booksId($id)
    {
        $bookId = Book::find($id);

        if ($bookId) {
            return response()->json([
                'message' => 'tampil buku sesuai id',
                'data' => $bookId
            ], 200);
        } else {
            return response()->json([
                'message' => 'book not found',
            ], 404);
        }
    }
}

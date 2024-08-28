<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): JsonResponse
    {
        $books = Book::all();
        return response()->json(compact('books'));
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function show($id)
    {
        return $id;
    }

    public function update(Request $request, $id)
    {
        return $request->all();
    }

    public function destroy($id)
    {
        return $id;
    }
}

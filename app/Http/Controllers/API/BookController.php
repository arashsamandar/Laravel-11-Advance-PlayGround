<?php

namespace App\Http\Controllers\API;

use App\Events\ArashEvent;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): JsonResponse
    {
        $books = Book::all();
        event(new ArashEvent('line 16 of BookController.php'));
        return response()->json(compact('books'));
    }

    public function store(Request $request): array
    {
        return $request->all();
    }

    public function show($id)
    {
        return $id;
    }

    public function update(Request $request, $id): void
    {

    }

    public function destroy($id): int
    {
        return $id;
    }
}

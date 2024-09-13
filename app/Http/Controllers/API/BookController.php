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
//        event(new ArashEventTwo('Event Two Was Triggered In BookController.php Controller File'));
        $books = Book::all();
        return response()->json(compact('books'));
    }


    public function store(Request $request): JsonResponse
    {
        $book = Book::create($request->all());
        return response()->json(compact('book'));
    }

    public function show(int $id): JsonResponse
    {
        if($book = Book::find($id) != null){
            return response()->json(compact('book'));
        }else{
            return response()->json(['message'=>'book id not found']);
        }
    }

    public function update(Request $request, $id): void
    {

    }

    public function destroy($id): int
    {
        return $id;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function returnSomeString(): JsonResponse{
        $jsonResponse = 'someString';
        return response()->json(compact('jsonResponse'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SampleTestsController extends Controller
{
    public function myMathRoute(?string $name, int $a = 0, int $b = 0): JsonResponse
    {
        $doOperation = match ($name) {
            'add' => fn($a, $b) => $a + $b,
            'sub' => fn($a, $b) => $a - $b,
            'mul' => fn($a, $b) => $a * $b,
            default => fn($a, $b) => 'UNKNOWN OPERATION',
        };
        return response()->json($doOperation($a, $b));
    }

    public function index(Request $request,int $id): Response
    {
        $responseIs = match ($request->method()) {
            'GET' => "GET " . $id,
            'POST' => "POST " . $id,
            default => 'UNKNOWN',
        };
        return response($responseIs, 200);
    }

    public function getToken(): string
    {
        return csrf_token();
    }
}

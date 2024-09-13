<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function index(Request $request,int $id): Response
    {
        $responseIs = match ($request->method()) {
            'GET' => `GET ID: ${$id}`,
            'POST' => `POST ID: ${$id}`,
            default => 'UNKNOWN',
        };
        return response($responseIs, 200);
    }

    public function getToken(): string
    {
        return csrf_token();
    }
}

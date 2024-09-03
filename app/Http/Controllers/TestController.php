<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;

class TestController extends Controller
{
    public function index(Request $request)
    {
        try{
            if($request->method() == 'POST'){
                return response('Post request was Hanlded Arash');
            }
        }catch (\Exception $e){
            return response('Proccess Failed' . $e->getMessage());
        }finally {
            return response('Proccess Finished');
        }
    }
}

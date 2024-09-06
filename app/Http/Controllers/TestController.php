<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function index(Request $request,int $id): Response
    {
        $responseIs = "Not Set";
        try{
            if($request->isMethod('GET')){
                $responseIs = 'GET request was Hanlded Arash' . $request->query('name');
            }elseif ($request->isMethod('POST')){
                $responseIs = 'POST request was Hanlded Arash' . $request->query('name');
            }
        }catch (\Exception $e){
            return response('Proccess Failed' . $e->getMessage());
        }finally {
            return response($responseIs);
        }
    }
}

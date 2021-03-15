<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minutes=1;
        $response=new Response('This is a test for cookie.');
        $response->withCookie(cookie('name','John',$minutes));
        return $response;
    }
    public function getCookie(Request $request){
        $value=$request->cookie('name');
        echo $value;
    }
}

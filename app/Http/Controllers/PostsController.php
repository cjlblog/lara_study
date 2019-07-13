<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        //echo date('Y-m-d H:i:s');
        //echo config('app.timezone');
        dd(env('APP_DEBUG'));
    }
}

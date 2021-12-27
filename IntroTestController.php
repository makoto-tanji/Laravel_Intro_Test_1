<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroTestController extends Controller
{
    //以下追加
    public function index($text = "建物です")
    {
        return $text;
    }
    public function index2($text){
        return "部屋番号は". $text . "です";
    }
}

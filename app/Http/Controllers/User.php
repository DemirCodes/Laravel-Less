<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function user(){
//        return view('user')->with('datas',$datas);
        return view('kullanici');
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home(){
        $name = "Stiven";
        $array = ['piim', 'sai', 'leib'];
        return view('home', compact('name', 'array'));
    }
    public function posts(){
        $posts = DB::table('posts')->where('title','LIKE', '%et %')->where('id','<', '500')->limit(10)->orderBy('title', 'desc')->count();
        dd($posts);
        return view('posts', compact('posts'));
    }
}

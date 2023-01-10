<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function project(){
        return view('project');
    }

    public function staff(){
        return view('staff');
    }

    public function getAllPost(){
        $posts = DB::table('post')->get();
        return view('post', compact('posts')); 
    }
}

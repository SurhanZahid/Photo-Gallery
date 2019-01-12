<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $post = DB::table('post')->get();

        return view('home')->with('post',$post);
    }

    public function download($id)
    {
        $post = DB::table('post')
        ->where('id','=',$id)
        ->first();
        //dd($post->path);
        return response()->download('images/post/',$post->path);
    }
}

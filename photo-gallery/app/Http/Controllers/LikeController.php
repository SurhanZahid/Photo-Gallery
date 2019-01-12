<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LikeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function like($id)
    {

        $check = DB::table('likes')
        ->where('user_id', \Auth::user()->id)
        ->where('post_id', $id)
        ->count();

        if ($check ==1) {
        $like = DB::table('post')
        ->where('id','=',$id)
        ->sum('likes_count');

        $sub = $like - 1;

        DB::table('post')
        ->where('id', $id)
        ->update(['likes_count' => $sub]);

        DB::table('likes')
        ->where('user_id', \Auth::user()->id)
        ->where('post_id', $id)
        ->delete();   

        return redirect()->back()->with('message', 'You UnLiked This Post');
        } 
        elseif($check ==0) {
         $like = DB::table('post')
        ->where('id','=',$id)
        ->sum('likes_count');

        $sum = $like + 1;

        DB::table('post')
        ->where('id', $id)
        ->update(['likes_count' => $sum]);

        $test = DB::table('likes')->insert([
        'post_id' => $id,
        'user_id' => \Auth::user()->id,
        ]);
              
        return redirect()->back()->with('message', 'You Liked This Post');
        }
        

        
    }
}

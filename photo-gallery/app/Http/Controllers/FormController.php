<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
class FormController extends Controller
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
    public function index()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'path' => 'required|mimes:jpeg,jpg,bmp,png',
            'categories' => 'required',
            'title' => 'required',
        ]);

        $image = $request->file('path');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('images/post'))
            {
                mkdir('images/post',0777,true);
            }
            $image->move('images/post',$imagename);
           
            $test = DB::table('post')->insert([
            'title' => $request->title,
            'categories' => $request->categories,
            'path' => $imagename,
            'likes_count' => 0,
            'user_id' => \Auth::user()->id,
          ]);

            
        }else{
            $imagename = "default.png";
         }
          return redirect()->back()->with('message', 'Post Added');
    }

    public function update_form($id)
    {
        $post_id = $id;
        $update = DB::table('post')
        ->where('post.id','=',$id)
        ->first();
        return view('post.update')->with('update',$update)->with('id',$id);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'path' => 'required|mimes:jpeg,jpg,bmp,png',
            'categories' => 'required',
            'title' => 'required',
        ]);

        $image = $request->file('path');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('images/post'))
            {
                mkdir('images/post',0777,true);
            }
            $image->move('images/post',$imagename);

        DB::table('post')
            ->where('id', $request->post_id)
            ->update(['title' => $request->title,'categories' => $request->categories,'path' => $imagename]);
            return redirect()->back();
         }else{
            $imagename = "default.png";
         }
    }

    public function delete($id)
    {
        DB::table('post')->where('id', '=', $id)->delete();
    }
}

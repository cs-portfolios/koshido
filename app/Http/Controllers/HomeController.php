<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function syousai()
    {
        return view('syousai');
    }

    public function hone()
    {
        $posts = \Auth::user()->posts;
        return view('hone',compact("posts"));
    }

    public function touroku($id)
    {
        $post = \App\Post::find($id);
        return view('touroku', compact("post"));
}

public function naiyou()
{
    return view('naiyou');
}

 function create(Request $request)
 {
   $title = $request->input("title"); // 情報を受け取る
   $name = $request->input("name"); // 情報を受け取る
   $user_id = \Auth::user()->id; // ログイン状態のユーザーidを取得
   \App\Post::create(["title" => $title, "name" => $name, "user_id" => $user_id]); // 受け取った情報を保存する
   return redirect("/hone"); // 一覧にリ
   
 }

 function new() {
    return view('home.touroku');
}

 

 function destroy($id)
{
  $post = \App\Post::find($id);
  $post->delete();
  return redirect("/hone");
  
}

function updeate(Request $request)
 {
   $impression = $request->input("impression"); // 情報を受け取る
   $useful = $request->input("useful"); // 情報を受け取る
   $id = $request->input("id"); // 情報を受け取る
   $post = \App\Post::find($id);
   $post->update(["impression" => $impression, "useful" => $useful]); // 受け取った情報を保存する
   return redirect("/touroku/".$post->id); // 一覧にリ
   
 }

}
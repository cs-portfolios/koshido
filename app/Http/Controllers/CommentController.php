<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    function create(Request $request)
    {
        $id = $request->input("id");
        $impression = $request->input("impression"); // 情報を受け取る
        $useful = $request->input("useful"); // 情報を受け取る
        if($impression == "" || $useful == "") {
            $post = \App\Post::find($id);
            return view('touroku', compact("post"));
        }
        \App\Comment::create(["post_id" => $id, "impression" => $impression, "useful" => $useful]); // 受け取った情報を保存する
        return back()->withInput(); // 詳細にリダイレクト
    }

    function destroy($id)
    {
        $comment = \App\Comment::find($id);
        $comment->delete();
        return back()->withInput();
    }
}

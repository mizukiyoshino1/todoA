<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //メイン画面を見せる技
    public function index()
    {
        return view('tasks.index');
    }

    //一覧画面を見せる技
    function create()
    {
        return view('tasks.create');
    }

    function store(Request $request)
    {
        // dd($request);
        //$requestの入っている値を、new Taskでデータベースに保存するという記述
        $post=new Task;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=Auth::id();

        $post->save();

        return redirect()->route('tasks.index');
    }
}

<?php

namespace App\Http\Controllers;

//Taskモデルを使う宣言
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Promise\TaskQueue;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    //メイン画面を見せる技
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks'=>$tasks]);
    }

    //一覧画面を見せる技
    function create()
    {
        return view('tasks.create');
    }

    function store(Request $request)
    {
        // dd($request);
        // $requestの入っている値を、new Taskでデータベースに保存するという記述
        $post=new Task;
        $post->title=$request->title;
        $post->contents=$request->body;
        $post->user_id=Auth::id();

        $post->save();

        return redirect()->route('tasks.index');
    }

    // $idはindex.blade.phpから送られたid
    function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task'=>$task]);
    }
    //['task'=>$task];わからん

    function update(Request $request, $id)
    {
        $post = Task::find($id);
        $post -> title = $request -> title;
        $post -> contents = $request -> body;
        $post -> save();
        return redirect()->route('tasks.index');
        // compact('task')わからん
    }

    function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}

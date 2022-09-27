<?php

namespace App\Http\Controllers;

//Taskモデルを使う宣言
use App\Models\Task;

use GuzzleHttp\Promise\TaskQueue;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //メイン画面を見せる技
    public function index()
    {
        return view('tasks.index');
    }
}

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

}

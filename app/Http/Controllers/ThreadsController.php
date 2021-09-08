<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Http\Requests\CreateThread;

class ThreadsController extends Controller
{
    // スレッド一覧表示
    public function index()
    {
      // スレッドテーブルから全取得してviewに渡す
      $threads = Thread::all();

      return view('threads/index', [
        'threads' => $threads,
      ]);
    }

    // スレッド作成画面表示
    public function showCreateForm()
    {
      return view('threads/create');
    }

    // 新しいスレッドの作成
    public function create(CreateThread $request)
    {
      $thread = new Thread();
      $thread->title = $request->title;
      $thread->save();

      return redirect('/threads');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Category;
use App\Http\Requests\CreateThread;

class ThreadsController extends Controller
{
    // スレッド一覧表示
    public function index(int $id)
    {
      // 現在のカテゴリーのデータを取得
      $current_category = Category::Find($id);

      // スレッドテーブルから'current_category'と紐づいたデータだけ抽出
      $threads = $current_category->thread;

      // カテゴリーテーブルからデータを全取得
      $categories = Category::all();

      return view('/threads/index', [
        'threads' => $threads,
        'categories' => $categories,
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

      return redirect('/threads/all');
    }
}

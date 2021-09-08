<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Http\Requests\CreateThread;

class ThreadsController extends Controller
{
    public function index()
    {
      $threads = Thread::all();

      return view('threads/index', [
        'threads' => $threads,
      ]);
    }

    public function showCreateForm()
    {
      return view('threads/create');
    }

    public function create(CreateThread $request)
    {
      $thread = new Thread();
      $thread->title = $request->title;
      $thread->save();

      return redirect('/threads');
    }
}

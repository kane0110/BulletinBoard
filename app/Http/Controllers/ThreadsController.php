<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadsController extends Controller
{
    public function index()
    {
      $threads = Thread::all();

      return view('threads/index', [
        'threads' => $threads,
      ]);
    }
}

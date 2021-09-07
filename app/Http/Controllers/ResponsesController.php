<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsesController extends Controller
{
    public function index()
    {
      return view('responses/index');
    }
}

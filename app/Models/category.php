<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 紐づいたスレッドのリストを取得
    public function thread()
    {
      return $this->belongsToMany('App\Models\Thread', 'threads_categories');
    }
}

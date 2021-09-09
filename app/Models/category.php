<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function thread()
    {
      // 中間テーブル'threads_categories'を用いて'Thread'モデルと紐づけ
      return $this->belongsToMany('App\Models\Thread', 'threads_categories');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    public function category()
    {
      // 中間テーブル'threads_categories'を用いて'Category'モデルと紐づけ
      return $this->belongsToMany('App\Models\Category', 'threads_categories');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    public function category()
    {
      return $this->belongsToMany('App\Models\Category', 'threads_categories');
    }
}

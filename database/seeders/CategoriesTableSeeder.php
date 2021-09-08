<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // カテゴリーテーブルにテストデータを挿入
    public function run()
    {
      $id = ['genre1', 'genre2', 'genre3'];
      $titles = ['ジャンル１', 'ジャンル２', 'ジャンル３'];

      foreach ($titles as $index => $title) {
          DB::table('categories')->insert([
              'id' => $id[$index],
              'title' => $title,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
          ]);
      }
    }
}

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
      $names = ['すべて', 'ジャンル１', 'ジャンル２', 'ジャンル３'];

      foreach ($names as $name) {
          DB::table('categories')->insert([
              'name' => $name,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
          ]);
      }
    }
}

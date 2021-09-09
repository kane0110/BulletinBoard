<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $all = 1;
      $genre = [2, 3, 4];
      foreach (range(1, 10) as $num) {
          $num_genre = $num % 3;

          DB::table('threads_categories')->insert([
              'thread_id' => $num,
              'category_id' => $all,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
          ]);

          DB::table('threads_categories')->insert([
              'thread_id' => $num,
              'category_id' => $genre[$num_genre],
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
          ]);
      }
    }
}

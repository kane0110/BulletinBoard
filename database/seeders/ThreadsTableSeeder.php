<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // スレッドテーブルにテストデータを挿入
    public function run()
    {
        $titles = ['Test Thread 1', 'Test Thread 2', 'Test Thread 3'];
        $num_res = [0, 1, 2];

        foreach ($titles as $index => $title) {
            DB::table('threads')->insert([
                'title' => $title,
                'num_res' => $num_res[$index],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

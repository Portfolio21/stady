<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::table('statuses')->insert([
            [
                'name' => 'to do',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'in progress',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'done',
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ]);
    }
}

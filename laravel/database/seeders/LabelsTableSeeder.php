<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::table('labels')->insert([
            [
                'name' => 'bug',
                'color' => 'red',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'feature',
                'color' => 'blue',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'urgent',
                'color' => 'green',
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ]);
    }
}

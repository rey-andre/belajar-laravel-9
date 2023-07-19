<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Reynold', 'score' => 90],
            ['id' => 2, 'name' => 'Andre', 'score' => 95],
            ['id' => 3, 'name' => 'Siagian', 'score' => 97]
        ];

        DB::table('students')->insert($data);
    }
}

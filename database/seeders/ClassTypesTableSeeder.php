<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Certificate Program', 'code' => 'CP'],
            ['name' => 'Diploma Program', 'code' => 'DP'],
            ['name' => 'Undergraduate Program', 'code' => 'UP'],
            ['name' => 'Masters Program', 'code' => 'MP'],
            ['name' => 'Ph.D. Program', 'code' => 'PhD'],
            ['name' => 'Research Fellowship', 'code' => 'RF'],
        ];
        

        DB::table('class_types')->insert($data);

    }
}

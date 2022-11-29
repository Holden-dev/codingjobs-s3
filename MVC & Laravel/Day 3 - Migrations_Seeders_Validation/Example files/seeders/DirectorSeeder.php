<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert([
            [
                'name' => 'Christopher Nolan',
                'date_of_birth' => '1980-01-01',
                'gender' => 'Male'
            ],
            [
                'name' => 'Martin Scorsese',
                'date_of_birth' => '1981-01-01',
                'gender' => 'Male'
            ]
        ]);
    }
}

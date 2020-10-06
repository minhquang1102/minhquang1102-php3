<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('student')->count() === 0) {
            DB::table('student')->insert([
                [
                    'name' => 'Nguyen Van A',
                    'phone' => '0123123123',
                    'age' => 20,
                    'gender' => 1,
                    'address' => 'HN',
                    'is_active' => true,
                ],
                [
                    'name' => 'Nguyen Van B',
                    'phone' => '0123123564',
                    'age' => 22,
                    'gender' => 0,
                    'address' => 'BN',
                    'is_active' => false,
                ],
            ]);
        } else {
            echo 'Bang students da co du lieu' . PHP_EOL;
        }
    }
}

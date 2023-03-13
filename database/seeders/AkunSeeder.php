<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Database\Seeders\AkunSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = [
            [
                'username' => 'adminschoolcraft',
                'password' => bcrypt('123456789'),
                'level' => 'admin',
            ],
            [
                'username' => 'petugasschoolcraft',
                'password' => bcrypt('123456789'),
                'level' => 'petugas',
            ],
            [
                'username' => 'siswaschoolcraft',
                'password' => bcrypt('123456789'),
                'level' => 'siswa',
            ]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}

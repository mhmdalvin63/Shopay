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
                'username' => 'AdminStarbhak1',
                'password' => bcrypt('adminstarbhak1'),
                'level' => 'admin',
            ],
            [
                'username' => 'SiswaTb1',
                'password' => bcrypt('siswatb1'),
                'level' => 'siswa',
            ],
            [
                'username' => 'AdminStarbhak2',
                'password' => bcrypt('adminstarbhak2'),
                'level' => 'Admin',
            ],
            [
                'username' => 'PetugasStarbhak',
                'password' => bcrypt('petugasstarbhak'),
                'level' => 'petugas',
            ],
            [
                'username' => 'SiswaStarbhak',
                'password' => bcrypt('123456789'),
                'level' => 'siswa',
            ]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}

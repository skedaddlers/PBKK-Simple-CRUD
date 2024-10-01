<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 0; $i < 20; $i++) {
            $data = [
                'nrp' => '50'.($i % 2 == 0 ? '25' : ($i % 3 == 0 ? '08' : ($i % 5 == 0 ? '30' : '29'))).'221'.$i,
                'nama' => 'Rukwa Dummy'.$i,
                'email' => 'example'.$i.'@gmail.com',
                'jurusan' => $i % 2 == 0 ? 'Teknik Informatika' : ($i % 3 == 0 ? 'Teknik Kimia' : ($i % 5 == 0 ? 'Desain Komunikasi Visual' : 'Desain Interior')),
                'alamat' => 'Jl. Dummy No. 123',
            ];
            DB::table('mhs')->insert($data);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1 -> nbi = "1461900186";
        $mhs1 -> nama_mhs = "Lintang Setiawan";
        $mhs1 -> save();

        $mhs2 = new Mahasiswa();
        $mhs2 -> nbi = "1461900026";
        $mhs2 -> nama_mhs = "Rengga Arwiyuda";
        $mhs2 -> save();

        $mhs3 = new Mahasiswa();
        $mhs3 -> nbi = "1461900236";
        $mhs3 -> nama_mhs = "Dwi Laksana Widodo";
        $mhs3 -> save();
    }
}

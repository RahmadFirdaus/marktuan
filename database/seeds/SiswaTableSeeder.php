<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
        ['nama'=>'Lee Donghae', 'umur'=>'17 Tahun', 'kelas'=>'XII RPL 2'],
        ['nama'=>'Mark Tuan', 'umur'=>'16 Tahun', 'kelas'=>'XI RPL 2'],
        ['nama'=>'Park Chanyeol', 'umur'=>'15 Tahun', 'kelas'=>'X RPL 2'],
        ['nama'=>'Jeon Jongkook', 'umur'=>'17 Tahun', 'kelas'=>'XII RPL 1'],
        ['nama'=>'Lee Jeno', 'umur'=>'17 Tahun', 'kelas'=>'XII RPL 3']];

        DB::table('siswa')->insert($siswa);
    }
}

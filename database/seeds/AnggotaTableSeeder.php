<?php

use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = [
        ['nama'=>'Lee Donghae', 'nama_group'=>'Super Junior'],
        ['nama'=>'Mark Tuan', 'nama_group'=>'Got7'],
        ['nama'=>'Park Chanyeol', 'nama_group'=>'EXO'],
        ['nama'=>'Jeon Jongkook', 'nama_group'=>'BTS'],
        ['nama'=>'Lee Jeno', 'nama_group'=>'NCT Dream']];

        DB::table('anggota')->insert($anggota);
    }
}

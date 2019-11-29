<?php

use App\Jadwal;
use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sawah1 = new Jadwal();
        $sawah1->sawah = 'sawah1';
        $sawah1->kegiatan = 'cangkul';
        $sawah1->tanggal = '10-10-1020';
        $sawah1->catatan = 'mantap sekali';
        $sawah1->save();

        $sawah2 = new Jadwal();
        $sawah2->sawah = 'sawah2';
        $sawah2->kegiatan = 'cangkul';
        $sawah2->tanggal = '10-10-1020';
        $sawah2->catatan = 'mantap sekali';
        $sawah2->save();
    }
}

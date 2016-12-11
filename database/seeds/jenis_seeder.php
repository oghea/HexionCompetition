<?php

use Illuminate\Database\Seeder;
use App\JenisItem;
class jenis_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiket = new JenisItem();
        $tiket->name = 'Tiket';
        $tiket->ket = 'Tiket Masuk Exhibition';
        $tiket->save();

        $cat = new JenisItem();
        $cat->name = 'Catalog';
        $cat->ket = 'Catalog Photograph from **';
        $cat->save();
    }
}

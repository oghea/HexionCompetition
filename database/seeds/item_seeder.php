<?php

use Illuminate\Database\Seeder;
use App\Item;

class item_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiket = new Item();
        $tiket->jenis()->associate(1);
        $tiket->nama = 'Tiket';
        $tiket->harga = '100000';
        $tiket->stock = 1000;
        $tiket->save();

        $cat = new Item();
        $cat->jenis()->associate(2);
        $cat->nama = 'Catalog';
        $cat->harga = '300000';
        $cat->stock = 100;
        $cat->save();

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item";
    protected $fillable = [
        'jenis_id', 'nama', 'harga', 'gambar', 'stock'
    ];

    public function jenis(){
        return $this->belongsTo('App\JenisItem', 'jenis_id');
    }

    public function order(){
        return $this->belongsToMany('App\Order','item_order','item_id','order_id');
    }
}

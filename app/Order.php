<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    protected $fillable = [
        'total', 'keterangan'
    ];
    public function pembeli(){
        return $this->hasOne('App\Pembeli');
    }
    public function item(){
        return $this->belongsToMany('App\Item','item_order','order_id','item_id');
    }
}

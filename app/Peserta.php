<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = "peserta";
    protected $fillable = [
        'order_id', 'email', 'first_name', 'last_name', 'phone', 'address', 'photo1','photo2','photo3', 'city'
    ];
    public function order(){
        return $this->belongsTo('App\Order', 'order_id');
    }
}

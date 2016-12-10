<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = "pembeli";
    protected $fillable = [
        'order_id', 'email', 'first_name', 'last_name', 'phone', 'address', 'zip', 'city', 'state'
    ];
    public function order(){
        return $this->belongsTo('App\Order', 'order_id');
    }
}

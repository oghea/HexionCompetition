<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;

class Pembeli extends Model
{
    use Billable;
    use Notifiable;
    protected $table = "pembeli";
    protected $fillable = [
        'order_id', 'email', 'first_name', 'last_name', 'phone', 'address', 'zip', 'city', 'state'
    ];
    public function order(){
        return $this->belongsTo('App\Order', 'order_id');
    }
}

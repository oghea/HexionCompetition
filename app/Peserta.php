<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Peserta extends Model
{
    use Notifiable;
    protected $table = "peserta";
    protected $fillable = [
        'order_id', 'email', 'first_name', 'last_name', 'phone', 'address', 'photo1','photo2','photo3', 'city'
    ];
}

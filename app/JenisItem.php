<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisItem extends Model
{
    protected $table = "jenis";
    public $timestamps = false;
    protected $fillable = [
        'name', 'ket'
    ];

    public function item(){
        return $this->hasOne('App\Item');
    }
}

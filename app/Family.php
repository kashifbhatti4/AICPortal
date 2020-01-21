<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Family extends Authenticatable
{
    //
    use Notifiable;
    protected $table='family';
    public $timestamps=false;
    protected $fillable = [
        'address','city','zip_code','home_state'
    ];
}

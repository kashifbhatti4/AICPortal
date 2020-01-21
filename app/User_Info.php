<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_Info extends Authenticatable
{
    //
    use Notifiable;
    protected $table='user_info';
    public $timestamps=false;
    protected $primaryKey = 'users_id';
    protected $fillable = [
        'name', 'password', 'email','gender','dob','is_photo','allergies','emer_name','emer_phone','emer_relation','is_parent','secondary_email','primary_phone','secondary_phone','emer_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];


    public function getAuthPassword()
    {
      return $this->password;
    }
}

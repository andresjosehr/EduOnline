<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Authenticatable
{
	protected $table = "usuarios";
    protected $fillable = [
        'nombres', 'email', 'username', 'rol', 'password',
    ];
}

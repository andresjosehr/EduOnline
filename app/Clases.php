<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
	protected $table = "clases";
    protected $guarded = [];


    public function Lecciones()
    {
    	return $this->hasMany(Lecciones::class, "id_clase", "id");
    }
}

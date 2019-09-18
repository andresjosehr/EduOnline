<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = "quiz";


     public function Preguntas()
    {
    	return $this->hasMany(Preguntas::class, "id_quiz", "id");
    }
}

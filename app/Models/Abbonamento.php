<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abbonamento extends Model {

    protected $table = 'abbonamento';

    protected $fillable = [
        'codice_a', 'costo','data1','data2','cf','codice_c'
    ];

    public function relazioneAbbonamento(){
        return $this->belongTo(Persona::class,"cf","cf");
    }
   

}


?>
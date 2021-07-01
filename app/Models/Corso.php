<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corso extends Model {

    protected $table = 'corso';

    protected $fillable = [
        'codice', 'giorno','ora','costo','tipo'
    ];

  


}


?>
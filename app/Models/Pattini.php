<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pattini extends Model {

    protected $table = 'pattini';

    protected $fillable = [
        'codice','taglia', 'modello', 'costo'
    ];

  


}


?>
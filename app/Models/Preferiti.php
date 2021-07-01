<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preferiti extends Model {

    protected $table = 'preferiti';

    protected $fillable = [
       'codiceP', 'cf'
    ];

  


}


?>
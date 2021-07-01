<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory; /**eloquent serve per le query */
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Persona extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table='persona';
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'cf','nome', 'cognome','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function relazioneAbbonamento(){
        return $this->hasMany(Abbonamento::class,"cf","cf");
    }
}

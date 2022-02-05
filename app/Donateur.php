<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donateur extends Model
{
    protected $fillable = ['montant','nom', 'prenom', 'pays', 'adresse', 'mail', 'tel','user_id'
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    public $table="partenaires";   
    protected $primaryKey='id';
  
    protected $fillable = [
        'nom', 'email', 'code','tel','image', 'adresse', 'description', 'status','type'
];

}

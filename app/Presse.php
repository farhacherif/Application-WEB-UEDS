<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presse extends Model
{
    public $table="presses";
    protected $primaryKey='id';

    protected $fillable = [
        'nom', 'image'
];
}

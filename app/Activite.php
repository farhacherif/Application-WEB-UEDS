<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Evenement;

class Activite extends Model
{
    public $table="activites";   
    protected $primaryKey='id';
  
  protected $fillable = [
      'nom'
  ]; 

      public function users() 
      {
          return $this->belongsToMany(User::class);
      }
      public function evenements() 
      {
          return $this->hasMany("App\Evenement");
      }
}

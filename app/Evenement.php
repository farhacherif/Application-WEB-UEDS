<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public $table = "evenements"; 
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'libelle', 'date', 'lieu', 'description', 'image','activite_id'
    ]; 

    
    public function activite()
    {
        return $this->belongsTo("App\Activite");
    }
   
      public function users()
{
    return $this->belongsToMany('App\User')->using('App\Evenement_User')
    ->withPivot([
        'created_by',
        'updated_by'
    ]);
 
}
    public function images()//le meme nom du model
    {
        return $this->hasMany("App\Image");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable =['image','evenement_id'
];


public function evenement()
{
    return $this->belongsTo("App\Evenement");
}

}

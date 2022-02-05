<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Activite;

class User extends Authenticatable
{
    use Notifiable;
    public $table = "users";
    protected $primaryKey = 'id';
    /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
                'name', 'sexe', 'date', 'cadre', 'tel', 'presentation', 'perimetre', 'pays', 'ville', 'code', 'activite_id', 'email','status', 'password', 'is_activated'
        ];

        public function activite()
        {
            return $this->attash("App\Activite");
        }
        public function evenements()
        {
            return $this->belongsToMany('App\Evenement')
            ->using('App\Evenement_User')
            ->withPivot([
                'created_by',
                'updated_by'
            ]);
        }
        public function messages()
{
    return $this->hasMany(Message::class);
}
public function likes(){
    return $this->hasMany(User::class);
  }
  public function posts(){
    return $this->hasMany(Post::class);
  }
  public function comments(){
    return $this->hasMany(Comment::class);
  }

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
   /* public function activites(){
        return $this->belongsToMany(Activite::class);
    }*/

}

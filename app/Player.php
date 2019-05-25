<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'steamId', 'username',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'UserId');
    }

    public function bans()
    {
        return $this->hasMany('App\Ban', 'player');
    }
}

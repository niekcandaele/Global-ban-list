<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bannedUntil', 'status', 'deletedAt', 'verified'
    ];

    public function deletedBy()
    {
        return $this->belongsTo('App\User', 'deletedById');
    }

    public function bannedBy()
    {
        return $this->belongsTo('App\User', 'bannedById');
    }

    public function server()
    {
        return $this->belongsTo('App\Server', 'ServerId');
    }

    public function player()
    {
        return $this->belongsTo('App\Player', 'PlayerId');
    }

    public function reason()
    {
        return $this->belongsTo('App\Reason', 'ReasonId');
    }

    public function game()
    {
        return $this->belongsTo('App\Game', 'GameId');
    }
}

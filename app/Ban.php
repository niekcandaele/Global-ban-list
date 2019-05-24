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
        'bannedUntil', 'status', 'deletedAt', 'verified', 'player', 'bannedBy', 'game', 'reason', 'proof',
    ];

    public function deletedBy()
    {
        return $this->belongsTo('App\User', 'deletedById');
    }

    public function bannedBy()
    {
        return $this->belongsTo('App\User', 'bannedBy');
    }

    public function player()
    {
        return $this->belongsTo('App\Player', 'player');
    }

    public function reason()
    {
        return $this->belongsTo('App\Reason', 'reason');
    }

    public function game()
    {
        return $this->belongsTo('App\Game', 'game');
    }
}

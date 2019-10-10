<?php

namespace Eprizy/Models;

use Illuminate\Database\Eloquent\Model;

class PrizeWinners extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'prize_winner_id', 'prize_id', 'user_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * Get the Prize for the PrizeWinners.
     */
    public function prize()
    {
        return $this->belongsTo(\Eprizy/Models\Prize::class);
    }

}
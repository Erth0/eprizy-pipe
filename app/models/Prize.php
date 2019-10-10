<?php

namespace Eprizy/Models;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'prize_id', 'category_id', 'user_id', 'title', 'description', 'amount', 'cost', 'active', 'free', 'confirmed', 'premium', 'raised_amount'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['expiry_date', 'created_at', 'updated_at'];

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
     * Get the PrizeWinners for the Prize.
     */
    public function prizeWinners()
    {
        return $this->hasMany(\Eprizy/Models\PrizeWinners::class);
    }


    /**
     * Get the Category for the Prize.
     */
    public function category()
    {
        return $this->belongsTo(\Eprizy/Models\Category::class);
    }

}
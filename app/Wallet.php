<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'address',
    ];

    protected $hidden = [
        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

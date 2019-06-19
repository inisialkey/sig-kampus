<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class SocialAccount extends Model
{
    protected $fillable = [
        'user_id', 'provider_id', 'provider_name'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

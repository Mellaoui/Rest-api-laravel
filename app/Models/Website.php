<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Sudo;

class Website extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class)->as('subscriptions')->withTimestamps() ;
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

}

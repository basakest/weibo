<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Status extends Model
{
    public function user()
    {
        return $this->belongsto(User::class);
    }
}

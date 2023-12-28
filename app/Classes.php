<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigments extends Model
{
    protected $guarded = [];
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

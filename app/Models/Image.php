<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

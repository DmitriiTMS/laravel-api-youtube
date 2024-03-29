<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function chanel()
    {
        return $this->belongsTo(Chanel::class, 'chanel_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    use HasFactory;
    protected $table = 'chanels';

    public function video()
    {
        return $this->hasMany(Video::class, 'chanel_id', 'id');
    }
}

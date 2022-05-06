<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function cargo()
    {
        return $this->hasMany(Cargo::class);
    }

    public function transpost()
    {
        return $this->hasOne(Trasport::class);
    }
}

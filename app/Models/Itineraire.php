<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itineraire extends Model
{
    use HasFactory;

    // public function clients()
    // {
    //     return $this->hasMany(Client::class);
    // }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function itineraire()
    {
        return $this->belongsTo(Itineraire::class);
    }
}

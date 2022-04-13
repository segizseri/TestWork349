<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function masters()
    {
        return $this->belongsToMany(Master::class, 'master_service', 'service_id', 'master_id');
    }
}

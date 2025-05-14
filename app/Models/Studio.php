<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studio extends Model
{
    protected $fillable = ['studio_code'];
    
    // relasi one to many ke tabel schedule
    public function schedules(): HasMany {
        return $this->hasMany(Schedule::class);
    }
}

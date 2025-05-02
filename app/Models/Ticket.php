<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    // relasi many to one ke tabel user
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    // relasi many to one ke tabel schedule
    public function Schedule(): BelongsTo {
        return $this->belongsTo(Ticket::class);
    }
}

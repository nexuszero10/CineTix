<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = ['user_id', 'schedule_id', 'order_number', 'number_of_seats', 'total_price', 'promotion_id', 'status'];

    // relasi many to many ke tabel snacks
    public function snacks(): BelongsToMany
    {
        return $this->belongsToMany(Snack::class, 'order_snack')->withPivot('quantity')->withTimestamps();
    }

    // relasi one to many ke tabel tickets
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    // relasi many to one ke tabel promotion 
    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    // relasi many to one ke tabel schedules
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    } 
}

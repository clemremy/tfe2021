<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    
    protected $fillable = [
        'item_id',
        'user_id', 
        'advance',
        'paid'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }
    public function item () {
        return $this->belongsTo(Item::class);
    }
}

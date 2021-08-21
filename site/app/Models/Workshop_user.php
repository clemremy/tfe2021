<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop_user extends Model
{
    use HasFactory;
    protected $table = 'workshop_users';

    protected $fillable = [
        'nb_persons',
        'workshops_id',
        'users_id'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }
    public function workshop () {
        return $this->belongsTo(Workshop::class);
    }
}

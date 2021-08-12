<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'nb_persons',
        'workshops_id',
        'users_id'
    ];

    public function users () {
        return $this->belongsToMany(User::class);
    }
    public function workshops () {
        return $this->belongsToMany(Workshop::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_name',
        'email',
        'nb_places',
    ];

    public function users () {
        return $this->belongsToMany(User::class);
    }
    public function workshops () {
        return $this->belongsToMany(Workshop::class);
    }
}

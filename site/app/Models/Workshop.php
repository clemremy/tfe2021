<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'nb_places',
        'price',
        'active'
    ];

    /*
    public function users () {
        return $this->belongsToMany(User::class);
    }
    */

    public function categories () {
        return $this->HasMany(Category::class);
    }

    public function workshop_users () {
        return $this->hasMany(Workshop_user::class);
    }
}

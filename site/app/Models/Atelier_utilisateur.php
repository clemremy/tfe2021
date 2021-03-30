<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atelier_utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nb_personne'
    ];
}

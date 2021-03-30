<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix_htva',
        'tva',
        'date_commande',
        'date_livraison',
        'acompte'
    ];
}

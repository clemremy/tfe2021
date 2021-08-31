<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'amount',
        'customization',
        'active',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];

    public function users () {
        return $this->HasMany(User::class);
    }

    public function categories () {
        return $this->belongsTo(Category::class);
    }
}
